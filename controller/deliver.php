<?php
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once("../model/UserModel.php");
require_once("../utils/Authentication.php");
require_once("../dto/ChatMessage.php");
require_once("../worker/MemCache2.php");
require_once('../utils/Common.php');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["action"]) && strcmp($_POST["action"], "check") == 0 && isset($_POST["last_id"])) {
            $user_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
            $last_id = $_POST["last_id"];
            while (true) {
                if ($user_id) {
                    $chat_message_array = MemCache2::get($user_id, $last_id);
                    if ($chat_message_array) {
                        $out = array_values($chat_message_array);
                        echo Common::toJson(Common::SUCCESS_OPERATION,$out);
                        break;
                    }
                } else {
                    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
                    break;
                }
                usleep(100000);
            }
        }
    }
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}
?>