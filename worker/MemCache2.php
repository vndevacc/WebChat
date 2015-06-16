<?php
/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/26/2015
 * Time: 9:20 AM
 */





require_once("../dto/ChatMessage.php");

class MemCache2
{
    const TIME_TO_LIVE = 1800;

    public static function put($key, $value)
    {
        $time = $value->time;
        if (!apc_exists($key)) {
            apc_store($key, serialize(array("$key.$time")), self::TIME_TO_LIVE);
        } else {
            $keys = unserialize(apc_fetch($key));
            if ($keys) {
                array_push($keys, "$key.$time");
                apc_store($key, serialize($keys));
            }
        }
        apc_store("$key.$time", serialize($value), self::TIME_TO_LIVE);
    }

    public static function get($key, $time)
    {
        $keys = unserialize(apc_fetch($key));
        if ($keys) {
            $chat_message_array = array();
            foreach ($keys as $time_key => $time_value) {
                $chat_message = unserialize(apc_fetch("$time_value"));
                if ($chat_message) {
                    if ($time == 0 || ($chat_message->time > $time && $chat_message->status < MSG_STATUS::DONE)) {
                        array_push($chat_message_array, $chat_message);
                    } else {
//                        unset($keys[$time_key]);
//                        apc_delete($key . $time_value);
                        $chat_message->status = MSG_STATUS::DONE;
                        apc_store("$time_value", serialize($chat_message), self::TIME_TO_LIVE);
                    }
                }
            }
            return $chat_message_array;
        }
        return false;


    }


}


?>