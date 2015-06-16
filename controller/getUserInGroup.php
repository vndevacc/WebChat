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
            $get_user_group = new Template("getUserInGroup");
            $users = UserModel::getUsers($group->member_ids);
            $get_user_group->assign('users', $users);
            $result = $get_user_group->getHtml();
            echo Common::toJson(Common::SUCCESS_OPERATION, $result);
            exit;
        }
    }
    echo Common::toJson(Common::ERR_EMPTY_DATA);
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}

?>