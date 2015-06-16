<?php

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/18/2015
 * Time: 4:16 PM
 */
require_once("../utils/Template.php");
require_once("../dto/User.php");
require_once("../model/UserModel.php");
require_once("../dto/ChatMessage.php");
require_once("../dto/TYPE.php");
require_once('../model/GroupModel.php');
require_once('../utils/Common.php');
require_once("../worker/MemCache2.php");

class Messenger extends Worker
{
    private $_group_id = 0;
    private $_user_id = 0;
    private $_message = 0;

    public function __construct($group_id, $user_id, $message)
    {
        $this->_group_id = (int)$group_id;
        $this->_message = $message;
        $this->_user_id = (int)$user_id;
    }

    public function run()
    {
        $group = GroupModel::getGroupById($this->_group_id);
        $user = UserModel::getUserById($this->_user_id);

        if ($group && $user) {
            $receiver_ids = $group->member_ids;
            $message = htmlspecialchars($this->_message);
            foreach ($receiver_ids as &$receiver_id) {
                $receiver_id = (int)$receiver_id;
                $chat_message = new ChatMessage();
                if (UserInGroupModel::getStatusBy($this->_group_id, $receiver_id) == INVITE_STATUS::ACCEPTED) {
                    $chat_message->sender_id = $this->_user_id;
                    $chat_message->receiver_id = $receiver_id;
                    $chat_message->group_id = $this->_group_id;
                    $chat_message->message = $message;
                    $chat_message->sender_avatar = $user->avatar;
                    $chat_message->sender_name = $user->display_name;
                    MemCache2::put($receiver_id, $chat_message);
                }

            }
        }
    }
}

?>