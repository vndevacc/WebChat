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
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["group_id"]) && isset($_POST["status"])) {
        $group_id = (int)$_POST["group_id"];
        $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
        $status = (int)$_POST["status"];

        if (UserInGroupModel::updateUserInGroup($status, $my_id, $group_id)) {

            if ($status == INVITE_STATUS::DECLINED) {
                $chat_group = GroupModel::getGroupById($group_id);
                if ($chat_group && $chat_group->member_count == 2) {
                    GroupModel::disableGroup($group_id);
                }

            }
            echo(Common::toJson(Common::SUCCESS_OPERATION, $group_id));
            exit;

        } else {
            echo(Common::toJson(Common::ERR_OPERATION_FAILED, "", "Operation failed."));
        }

    }
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}
?>
