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

    $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
    $user = UserModel::getUserById($my_id);
    $group_array = GroupModel::getGroupByMemberId($my_id, INVITE_STATUS::ACCEPTED);
    if ($group_array) {
        $get_group_chat = new Template("getGroup");
        foreach ($group_array as &$group) {
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
        }
        $get_group_chat->assign('groups', $group_array);
        $result = $get_group_chat->getHtml();
        echo Common::toJson(Common::SUCCESS_OPERATION, $result);
        exit;
    }
    echo Common::toJson(Common::ERR_EMPTY_DATA);
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}



?>