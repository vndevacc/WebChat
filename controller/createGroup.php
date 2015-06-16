<?php
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once("../model/UserModel.php");
require_once("../utils/Authentication.php");
require_once("../model/GroupModel.php");
require_once("../model/UserInGroupModel.php");
require_once('../utils/Common.php');
if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["user_id"])) {
            $_user_id = (int)$_POST["user_id"];
            $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
            if (($_POST["user_id"]) == $my_id) {
                echo(Common::toJson(Common::ERR_OPERATION_FAILED, "", "Invalid invited user."));
                exit;
            }
            $user_group_array = UserInGroupModel::getGroupByHostId($my_id);


            if ($user_group_array) {
                foreach ($user_group_array as $user_group) {
                    if ($_user_id == $user_group->user_id) {
                        echo(Common::toJson(Common::ERR_OPERATION_FAILED, "", "You had invited this user."));
                        exit;
                    }
                }
            }
            $chatGroup = new ChatGroup();
            $chatGroup->host_id = $my_id;
            $chatGroup->type = 0;
            $chatGroup->member_ids = (array($my_id, $_user_id));
            $chatGroup->member_count = 2;
            $chatGroup->status = 1;
            $chatGroup->created_date = time();

            $group_id = (GroupModel::addGroup($chatGroup));
            if ($group_id) {
                echo(Common::toJson(Common::SUCCESS_OPERATION, $group_id));
            } else {
                echo(Common::toJson(Common::ERR_OPERATION_FAILED, "", "Creating Group failed."));
            }
        } elseif (isset($_POST["user_ids"]) && isset($_POST["group_name"])) {
            $user_ids = json_decode($_POST["user_ids"], true);
            $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
            $group_name = htmlspecialchars($_POST["group_name"]);

            if (strlen($group_name) > 50) {
                echo(Common::toJson(Common::ERR_INVALID_DATA, "", "Max length of group name is 50 characters."));
                exit;
            }

            $user_ids = array_filter($user_ids, function (&$id) {
                $id = (int)$id;
                return $id;
            });
            if (sizeof($user_ids) < 1) {
                echo(Common::toJson(Common::ERR_INVALID_DATA, "", "Invalid invited users."));
            }
            array_push($user_ids, $my_id);

            $chatGroup = new ChatGroup();
            $chatGroup->group_name = $group_name;
            $chatGroup->host_id = $my_id;
            $chatGroup->type = 1;
            $chatGroup->member_ids = $user_ids;
            $chatGroup->member_count = sizeof($user_ids);
            $chatGroup->status = 1;
            $chatGroup->created_date = time();
            $group_id = GroupModel::addGroup($chatGroup);
            if ($group_id) {
                echo(Common::toJson(Common::SUCCESS_OPERATION, $group_id));
            } else {
                echo(Common::toJson(Common::ERR_OPERATION_FAILED, "", "Creating Group failed."));
            }

        }
    }
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}
?>