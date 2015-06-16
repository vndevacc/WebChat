<?php
/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/21/2015
 * Time: 3:05 PM
 */
require_once('../dto/TYPE.php');

class ChatGroup
{
    public $id;
    public $group_name = "";
    public $host_id;
    public $type = CHAT_TYPE::PRIVATE_CHAT;
    public $member_ids = array();
    public $member_count = 0;
    public $status = USER_STATUS::DISABLE;
    public $avatar = "";
    public $created_date = 0;
    public $members_name="";
}

class UserInGroup
{
    public $user_id = 0;
    public $group_id = 0;
    public $host_id = 0;
    public $status = INVITE_STATUS::PENDING;

}

?>