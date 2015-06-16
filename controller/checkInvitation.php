<?php
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once("../model/UserModel.php");
require_once("../utils/Authentication.php");
require_once("../model/GroupModel.php");
require_once('../utils/Common.php');
require_once('../utils/FileManager.php');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (isset($_COOKIE["SESSIONID"]) && Authencication::isLogIn($_COOKIE["SESSIONID"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && ($_POST["action"]) == "check") {
        $my_id = (int)Authencication::getUserId($_COOKIE["SESSIONID"]);
        while (true) {
            $group_array = GroupModel::getGroupByMemberId($my_id, INVITE_STATUS::PENDING);
            if ($group_array) {
                foreach ($group_array as $i => $group) {
                    if (!$group->type) {
                        $current_id = 0;
                        if ($group->host_id != $my_id) {
                            $current_id = ($group->host_id);
                        } else {
                            unset($group_array[$i]);
                            continue;
                        }
                        if ($current_id) {
                            $user_result = UserModel::getUserById($current_id);
                            if ($user_result) {
                                $group->group_name = $user_result->display_name;
                                $group->avatar = $user_result->avatar;
                            }
                        }

                    } else {
                        $group->avatar = FileManager::DEFAULT_GROUP;
                    }
                }
                if (sizeof($group_array) > 0) {
                    $check_invitation = new Template("checkInvitation");
                    $check_invitation->assign('groups', $group_array);
                    $result = $check_invitation->getHtml();
                    echo(Common::toJson(Common::SUCCESS_OPERATION, $result));
                    break;

                } else {
                    sleep(1);
                }

            } else {
                sleep(1);
            }
        }
    }
} else {
    echo(Common::toJson(Common::ERR_SESSION_EXPIRED));
}
?>