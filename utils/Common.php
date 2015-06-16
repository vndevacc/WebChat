<?php

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/22/2015
 * Time: 11:15 AM
 */
class Common
{
    const ERR_SESSION_EXPIRED = -1000;
    const ERR_OPERATION_FAILED = -1;
    const ERR_INVALID_DATA = -2;
    const ERR_EMPTY_DATA = -999;
    const SUCCESS_OPERATION = 0;

    public static function getIdNotEqual($member_array_id, $host_id)
    {
        foreach ($member_array_id as $member_id) {
            if ($member_id != $host_id)
                return $member_id;
        }
        return false;
    }

    public static function getIdsNotEqual($member_array_id, $host_id)
    {
        $result = array();
        foreach ($member_array_id as $member_id) {
            if ($member_id != $host_id)
                array_push($result, $member_id);
        }
        return $result;
    }

    public static function myTruncate($string, $limit, $break = ".", $pad = "...")
    {
        // return with no change if string is shorter than $limit
        if (strlen($string) <= $limit) return $string;

        // is $break present between $limit and the end of the string?
        if (false !== ($breakpoint = strpos($string, $break, $limit))) {
            if ($breakpoint < strlen($string) - 1) {
                $string = substr($string, 0, $breakpoint) . $pad;
            }
        }

        return $string;
    }

    public static function toJson($error, $data = "", $message = "")
    {
        $result = array();
        $result["error"] = $error;
        $result["data"] = $data;
        $result["message"] = $message;
        return json_encode($result);
    }


}

?>