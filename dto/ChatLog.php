<?php

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/18/2015
 * Time: 3:49 PM
 */
require_once('../dto/TYPE.php');
class Message
{
    private $id=0;
    private $sender_id=0;
    private $group_id=0;
    private $message="";
    private $sent_list=array() ;
    private $created_date=0;
    private $updated_date=0;
    private $status = MSG_STATUS::PENDING;

    /**
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @param int $created_date
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * @param int $sender_id
     */
    public function setSenderId($sender_id)
    {
        $this->sender_id = $sender_id;
    }

    /**
     * @return array
     */
    public function getSentList()
    {
        return $this->sent_list;
    }

    /**
     * @param array $sent_list
     */
    public function setSentList($sent_list)
    {
        $this->sent_list = $sent_list;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getUpdatedDate()
    {
        return $this->updated_date;
    }

    /**
     * @param int $updated_date
     */
    public function setUpdatedDate($updated_date)
    {
        $this->updated_date = $updated_date;
    }




}

?>