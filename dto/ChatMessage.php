<?php

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/18/2015
 * Time: 4:07 PM
 */

require_once('../dto/TYPE.php');

class ChatMessage
{
    public $sender_id = 0;
    public $group_id = 0;
    public $message = "";
    public $sender_avatar = "../public/images/default.jpg";
    public $sender_name = "";
    public $receiver_id = 0;
    public $status = MSG_STATUS::PENDING;
    private $retry = 3;
    public $time = 0;

    public function __construct()
    {
        $this->time = time();
        $this->status = MSG_STATUS::PENDING;
    }


}

?>