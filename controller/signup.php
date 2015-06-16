<?php


require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once( "../model/UserModel.php");
require_once("../utils/Authentication.php");
require_once("../utils/FileManager.php");


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["sign_up"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $display_name = $_POST["display_name"];
    $email = $_POST["email"];
    $error = "";

    if (strlen($username) < 1) {
        $error = $error . USER_ERROR::ERR_USERNAME_EMPTY . "<br/>";
    } else {
        if (strlen($username) > USER_ERROR::CONST_USER_MAX_LENGTH) {
            $error = $error . USER_ERROR::ERR_USERNAME_MANDATORY . "<br/>";
        }
    }
    if (!isset($password) || strcmp($password,$confirm_password)!=0) {
        $error = $error . USER_ERROR::ERR_PASSWORD_NOT_MATCH . "<br/>";
    } elseif (strlen($password) > USER_ERROR::CONST_USER_PASSWORD_MAX_LENGTH) {
        $error = $error . USER_ERROR::ERR_PASSWORD_MANDATORY . "<br/>";
    }
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


    if ($error != "") {
        $sign_up = new Template("signup");
        $sign_up->assign("error", $error);
        $sign_up->assign("username", $username);
        $sign_up->assign("display_name", $display_name);
        $sign_up->assign("email", $email);
        $sign_up->render();
    } else {
        $user = new User();
        $user->username = htmlspecialchars($username);
        $user->display_name = htmlspecialchars($display_name);
        $user->password = $password;
        $user->email = htmlspecialchars($email);
        $user->avatar = ($target_file == "") ? "../public/images/default.jpg" : $target_file;
        $user->status = 1;
        $user->created_date = time();
        $user->updated_date = $user->created_date;
        $user->setPasswordHash();
        $create_error = UserModel::addUser($user);
        if ($create_error == USER_ERROR::SUCCESS_CREATE_USER) {
            header("Location: signin.php?t=f");
        } else {
            $sign_up = new Template("signup");
            $sign_up->assign("error", $create_error);
            $sign_up->assign("username", $username);
            $sign_up->assign("display_name", $display_name);
            $sign_up->assign("email", $email);
            $sign_up->render();
        }
    }

} else {
    $sign_up = new Template("signup");
    $sign_up->render();
}

?>