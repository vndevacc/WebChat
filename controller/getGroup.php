<?php

require_once('../utils/Template.php');
require_once('../dto/User.php');
require_once('../model/UserModel.php');
require_once('../utils/Authentication.php');
require_once('../model/GroupModel.php');
require_once('../utils/Common.php');
require_once('../utils/FileManager.php');

if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["group_id"])) {
        $group = GroupModel::getGroupById($_POST["group_id"]);
        $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
        if ($group) {
            $group_array = array($group);
            $get_group = new Template("getGroup");
            if (!$group->type) {
                $current_id = 0;
                if ($group->host_id != $my_id) {
                    $current_id = ($group->host_id);
                } else {
                    $current_id = Common::getIdNotEqual($group->member_ids, $my_id);
                }
                if ($current_id) {
                    $user_result = UserModel::getUserById($current_id);
                    if ($user_result) {
                        $group->group_name = $user_result->display_name;
                        $group->avatar = $user_result->avatar;
                    }
                }

            } else {
                $group->avatar = FileManager::DEFAULT_GROUP;
            }
            $get_group->assign('groups', $group_array);
            $result = $get_group->getHtml();
            echo Common::toJson(Common::SUCCESS_OPERATION, $result);
            exit;
        }
    }
    echo Common::toJson(Common::ERR_EMPTY_DATA);
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}

?>