<?php
/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/21/2015
 * Time: 4:00 PM
 */
require_once('../dto/ChatGroup.php');
require_once('../utils/Connection.php');

class UserInGroupModel
{

    public static function addGroup(UserInGroup $user_group)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("INSERT INTO `user_group` (`user_id`, `group_id`,`host_id`, `status`) VALUES (?,?, ?, ?)");
        $i = 1;
        $statement->bindValue($i++, $user_group->user_id);
        $statement->bindValue($i++, $user_group->group_id);
        $statement->bindValue($i++, $user_group->host_id);
        $statement->bindValue($i++, $user_group->status);
        return $statement->execute();
    }


    public static function getGroupByHostId($id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("SELECT * FROM user_group ug, chat_group cg  WHERE ug.host_id = ? and cg.status=1  and cg.type=0 and ug.status >=0 and ug.group_id=cg.id ");
        if ($statement->execute(array($id))) {
            $existGroup = $statement->rowCount();
            if ($existGroup <= 0)
                return false;
            else {
                $user_group_array = array();
                foreach ($statement->FetchAll() as $user_group) {
                    $user_group_result = new UserInGroup();
                    $user_group_result->user_id = $user_group["user_id"];
                    $user_group_result->group_id = $user_group["group_id"];
                    $user_group_result->host_id = $user_group["host_id"];
                    $user_group_result->status = $user_group["status"];
                    array_push($user_group_array, $user_group_result);
                }
                return $user_group_array;
            }
        }
    }

    public static function getGroupByMemberId($id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("SELECT * FROM user_group WHERE member_id = ? and status >=0");
        if ($statement->execute(array($id))) {
            $existGroup = $statement->rowCount();
            if ($existGroup <= 0)
                return false;
            else {
                $user_group_array = array();
                foreach ($statement->FetchAll() as $user_group) {
                    $user_group_result = new UserInGroup();
                    $user_group_result->user_id = $user_group["user_id"];
                    $user_group_result->group_id = $user_group["group_id"];
                    $user_group_result->host_id = $user_group["host_id"];
                    $user_group_result->status = $user_group["status"];
                    array_push($user_group_array, $user_group_result);
                }
                return $user_group_array;
            }
        }
    }

    public static function getStatusBy($group_id, $user_id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("SELECT status FROM user_group WHERE group_id = ? and user_id= ?");
        if ($statement->execute(array($group_id, $user_id))) {
            $existGroup = $statement->rowCount();
            if ($existGroup <= 0)
                return -1;
            else {
                foreach ($statement->FetchAll() as $status) {
                    return $status["status"];
                }
                return -1;
            }
        }
    }

    public static function updateUserInGroup($status, $user_id, $group_id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("UPDATE `user_group` SET `status`=? WHERE `user_id`=? and `group_id` = ?");
        $i = 1;
        $statement->bindValue($i++, $status);
        $statement->bindValue($i++, $user_id);
        $statement->bindValue($i++, $group_id);
        return $statement->execute();

    }
}
?>