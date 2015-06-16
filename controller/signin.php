<?php

require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once( "../model/UserModel.php");
require_once("../utils/Authentication.php");

if(isset($_COOKIE["SESSIONID"])  && Authencication::isLogIn($_COOKIE["SESSIONID"])){
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
    header("Location: chat.php" );
}



if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["log_in"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $error = "";

    if ($error != "") {
        $sign_up = new Template("signin");
        $sign_up->assign("error", $error);
        $sign_up->assign("username", $username);
        $sign_up->render();
    } else {
        $user = UserModel::getUser($username);
        if ( $user && $user->validPasswordHash($password)) {
            $session_value = Authencication::getSessionValue($user);
            setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
            header("Location: chat.php" );
        } else {
            $sign_up = new Template("signin");
            $sign_up->assign("error", USER_ERROR::ERR_INCORRECT_USER);
            $sign_up->assign("username", $username);
            $sign_up->render();
        }


    }

} else {
    $sign_up = new Template("signin");
    if (isset($_GET["t"]) && $_GET["t"]=="f"){
        $sign_up->assign("info", USER_ERROR::SUCCESS_CREATE_USER);
    }

    $sign_up->render();
}
?>