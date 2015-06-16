<?php

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/18/2015
 * Time: 3:53 PM
 */
abstract class CHAT_TYPE
{
    const  PRIVATE_CHAT = 0;
    const  GROUP_CHAT = 1;
}

abstract class MSG_STATUS
{
    const  FAILED = -2;
    const  INTERRUPTED = -1;
    const PENDING = 0;
    const PROCESS = 1;
    const DONE = 2;
}

abstract class USER_STATUS
{
    const  DISABLE = 0;
    const  ENABLE = 1;
}

abstract class INVITE_STATUS
{
    const  DECLINED = -1;
    const  PENDING = 0;
    const  ACCEPTED = 1;

}

?>