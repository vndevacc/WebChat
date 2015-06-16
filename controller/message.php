<?php
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once("../model/UserModel.php");
require_once("../utils/Authentication.php");
require_once("../dto/ChatMessage.php");
require_once("../dto/TYPE.php");
require_once("../worker/Messenger.php");
require_once('../model/GroupModel.php');
require_once('../utils/Common.php');
if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["action"]) && strcmp($_POST["action"], "send") == 0 && isset($_POST["group_id"]) && isset($_POST["message"])) {
            $group_id = (int)$_POST["group_id"];
            $message = $_POST["message"];
            $message = Common::myTruncate($message, 1024);
            $user_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
            $mess = new Messenger($group_id, $user_id, $message);
            $mess->start();
        }
        echo(Common::toJson(Common::SUCCESS_OPERATION));
    }

} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}
?>