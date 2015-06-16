<?php
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once("../model/UserModel.php");
require_once("../utils/Authentication.php");
require_once('../utils/Common.php');
if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    $session_value = $_COOKIE["SESSIONID"];
    setcookie("SESSIONID", $session_value, time() + (1800), "", "", false, true);
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["query"])) {
        $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
        $query = htmlspecialchars($_POST["query"]);
        $user_array = UserModel::find($query, $my_id);
        if ($user_array) {
            $chat = new Template("searchUser");
            $chat->assign('users', $user_array);
            $result = $chat->getHtml();
            echo Common::toJson(Common::SUCCESS_OPERATION, $result);
            exit;
        }

    }
    echo Common::toJson(Common::ERR_EMPTY_DATA);
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}

?>