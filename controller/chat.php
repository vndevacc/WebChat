<?php

require_once('../utils/Template.php');
require_once('../dto/User.php');
require_once('../model/UserModel.php');
require_once('../utils/Authentication.php');
require_once('../model/GroupModel.php');

if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
    $chat = new Template("chat");
    $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
    $user = UserModel::getUserById($my_id);
    $chat->assign('is_log_in', 1);
    $chat->assign('avatar', $user->avatar);
    $chat->assign('display_name', $user->display_name);
    $chat->render();
} else {
    header('Location: signin.php');
}

?>