<?php
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once( "../model/UserModel.php");
require_once("../utils/Authentication.php");
require_once("../utils/Common.php");
$error = new Template("error");

if (isset($_GET["code"])) {
    $code = (int)$_GET["code"];
    if ($code == Common::ERR_SESSION_EXPIRED) {
        $error->assign("error", "Session is expired. Please sign in again.");
    } else {
        $error->assign("error", "Unknown error. Please try again.");
    }

} else {
    $error->assign("error", "Unknown error. Please try again.");
}

if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    $user = UserModel::getUserById(Authencication::getUserId($_COOKIE["SESSIONID"]));
    $error->assign("is_log_in", 1);
    $error->assign("display_name", $user->display_name);
    $error->assign("avatar", $user->avatar);
}
$error->render();
?>