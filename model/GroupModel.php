<?php
require_once('../dto/ChatGroup.php');
require_once('../dto/TYPE.php');
require_once('../utils/Connection.php');
require_once('../model/UserInGroupModel.php');

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/21/2015
 * Time: 3:14 PM
 */
class GroupModel
{
    public static function addGroup(ChatGroup $group)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("INSERT INTO chat_group (group_name,host_id, `type`, member_ids, member_count, status, created_date)
 VALUES (?,?, ?, ?, ?, ?, ?)");
        $i = 1;
        $statement->bindValue($i++, $group->group_name);
        $statement->bindValue($i++, $group->host_id);
        $statement->bindValue($i++, $group->type);
        $statement->bindValue($i++, json_encode($group->member_ids));
        $statement->bindValue($i++, $group->member_count);
        $statement->bindValue($i++, $group->status);
        $statement->bindValue($i++, $group->created_date);
        if ($statement->execute()) {
            $id_result = $connection->lastInsertId();
            if ($id_result > 0) {
                foreach ($group->member_ids as $user_id) {
                    $user_group = new UserInGroup();
                    $user_group->user_id = $user_id;
                    $user_group->group_id = $id_result;
                    $user_group->host_id = $group->host_id;
                    if ($user_id == $group->host_id) {
                        $user_group->status = INVITE_STATUS::ACCEPTED;
                    } else {
                        $user_group->status = INVITE_STATUS::PENDING;
                    }
                    UserInGroupModel::addGroup($user_group);

                }
            }
            return $id_result;
        }
        return false;

    }


    public static function getGroupById($id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("SELECT * FROM chat_group WHERE id = ? and status=1");
        if ($statement->execute(array($id))) {
            $existGroup = $statement->rowCount();
            if ($existGroup <= 0)
                return false;
            else {
                $result_group = new ChatGroup();
                foreach ($statement->FetchAll() as $group) {
                    $result_group->id = $group["id"];
                    $result_group->group_name = $group["group_name"];
                    $result_group->host_id = $group["host_id"];
                    $result_group->type = $group["type"];
                    $result_group->member_ids = json_decode($group["member_ids"]);
                    $result_group->member_count = $group["member_count"];
                    $result_group->status = $group["status"];
                    $result_group->created_date = $group["created_date"];
                    break;
                }
                return $result_group;
            }
        }
    }

    public static function getGroupByMemberId($id, $status)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("SELECT cg.id,cg.group_name,cg.host_id,cg.type,cg.member_ids,cg.member_count,cg.status,cg.created_date
FROM chat_group cg, user_group ug WHERE ug.user_id = ? AND cg.id = ug.group_id AND ug.status= ? AND cg.status=1 ");
        if ($statement->execute(array($id, $status))) {
            $existGroup = $statement->rowCount();
            if ($existGroup <= 0)
                return false;
            else {
                $result_group_array = array();
                foreach ($statement->FetchAll() as $group) {
                    $result_group = new ChatGroup();
                    $result_group->id = $group["id"];
                    $result_group->group_name = $group["group_name"];
                    $result_group->host_id = $group["host_id"];
                    $result_group->type = $group["type"];
                    $result_group->member_ids = json_decode($group["member_ids"]);
                    $result_group->member_count = $group["member_count"];
                    $result_group->status = $group["status"];
                    $result_group->created_date = $group["created_date"];
                    array_push($result_group_array, $result_group);
                }
                return $result_group_array;
            }
        }
    }

    public static function disableGroup($id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("UPDATE `chat_group` SET `status`='0' WHERE `id`= ? ");
        return $statement->execute(array($id));
    }


}
?>