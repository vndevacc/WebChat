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
require_once("../utils/FileManager.php");
require_once("../utils/Authentication.php");

if (!isset($_COOKIE["SESSIONID"]) || !Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    header("Location: signin.php");
}else{
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["modify_account"])) {
    $display_name = $_POST["display_name"];
    $email = $_POST["email"];
    $error = "";

    if (strlen($display_name) < 1) {
        $error = $error . USER_ERROR::ERR_DISPLAY_NAME_EMPTY . "<br/>";
    } else {
        if (strlen($display_name) > USER_ERROR::CONST_USER_MAX_LENGTH) {
            $error = $error . USER_ERROR::ERR_DISPLAY_NAME_MANDATORY . "<br/>";
        }
    }

    if (strlen($email) > 0) {
        if (strlen($email) > USER_ERROR::CONST_USER_MAX_LENGTH) {
            $error = $error . USER_ERROR::ERR_EMAIL_MANDATORY . "<br/>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = $error . USER_ERROR::ERR_INVALID_EMAIL . "<br/>";
        }
    }

    $target_file = "";
    $upload_avatar_err= FileManager::validImageFile($_FILES["avatar"],$target_file);
    if($upload_avatar_err!=""){
        $error = $error . $upload_avatar_err . "<br/>";
    }

    $user = UserModel::getUserById(Authencication::getUserId($_COOKIE["SESSIONID"]));
    if ($error != "") {
        $modify_account = new Template("modifyAccount");
        $modify_account->assign("error", $error);
        $modify_account->assign("is_log_in", 1);
        $modify_account->assign("display_name", $user->display_name);
        $modify_account->assign("email", $user->email);
        $modify_account->assign("avatar", $user->avatar);
        $modify_account->render();
    } else {

        $user->display_name = htmlspecialchars($display_name);
        $user->email = htmlspecialchars($email);
        if ($target_file != "") {
            $user->avatar = $target_file;
        }
        $user->updated_date = time();

        $update_error = UserModel::updateUser($user);
        if ($update_error == USER_ERROR::SUCCESS_MODIFY_ACCOUNT) {
            header("Location: modifyAccount.php?t=f");
        } else {
            $modify_account = new Template("modifyAccount");
            $modify_account->assign("error", $update_error);
            $modify_account->assign("username", $user->username);
            $modify_account->assign("display_name", $user->display_name);
            $modify_account->assign("avatar", $user->avatar);
            $modify_account->assign("email", $user->email);
            $modify_account->render();
        }
    }

} else {
    $modify_account = new Template("modifyAccount");
    $user = UserModel::getUserById(Authencication::getUserId($_COOKIE["SESSIONID"]));
    $modify_account->assign("is_log_in", 1);
    $modify_account->assign("avatar", $user->avatar);
    $modify_account->assign("display_name", $user->display_name);
    $modify_account->assign("username", $user->username);
    $modify_account->assign("email", $user->email);
    $modify_account->assign("avatar", $user->avatar);
    if (isset($_GET["t"]) && $_GET["t"] == "f") {
        $modify_account->assign("info", USER_ERROR::SUCCESS_MODIFY_ACCOUNT);
    }
    $modify_account->render();
}

?>