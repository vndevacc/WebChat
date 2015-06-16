<?php
/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/18/2015
 * Time: 9:50 AM
 */
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once( "../model/UserModel.php");
require_once("../utils/Authentication.php");

if (!isset($_COOKIE["SESSIONID"]) || !Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
    header("Location: signin.php");
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["change_password"])) {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];
    $error = "";

    if (!isset($new_password) || strcmp($new_password, $confirm_password)!=0) {
        $error = $error . USER_ERROR::ERR_PASSWORD_NOT_MATCH . "<br/>";
    } elseif (strlen($new_password) > USER_ERROR::CONST_USER_PASSWORD_MAX_LENGTH) {
        $error = $error . USER_ERROR::ERR_PASSWORD_MANDATORY . "<br/>";
    }

    $user = UserModel::getUserById(Authencication::getUserId($_COOKIE["SESSIONID"]));
    if (!$user->validPasswordHash($current_password)) {
        $error = $error . USER_ERROR::ERR_INVALID_CURRENT_PASSWORD . "<br/>";
    } else {
        $user->password = $new_password;
        $user->setPasswordHash();
    }

    if ($error != "") {
        $change_password = new Template("changePassword");
        $change_password->assign("is_log_in", 1);
        $change_password->assign("avatar", $user->avatar);
        $change_password->assign("display_name", $user->display_name);
        $change_password->assign("error", $error);
        $change_password->render();
    } else {
        $update_error = UserModel::updateUser($user);
        if ($update_error == USER_ERROR::SUCCESS_MODIFY_ACCOUNT) {
            header("Location: changePassword.php?t=f");
        } else {
            $change_password = new Template("changePassword");
            $change_password->assign("error", $update_error);
            $change_password->assign("username", $user->username);
            $change_password->assign("display_name", $user->display_name);
            $change_password->assign("avatar", $user->avatar);
            $change_password->assign("email", $user->email);
            $change_password->render();
        }
    }

} else {
    $change_password = new Template("changePassword");
    $user = UserModel::getUserById(Authencication::getUserId($_COOKIE["SESSIONID"]));
    $change_password->assign("is_log_in", 1);
    $change_password->assign("avatar", $user->avatar);
    $change_password->assign("display_name", $user->display_name);
    if (isset($_GET["t"]) && $_GET["t"] == "f") {
        $change_password->assign("info", USER_ERROR::SUCCESS_CHANGE_PASSWORD);
    }
    $change_password->render();
}

?>