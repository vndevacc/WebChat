<?php
require_once('../dto/User.php');

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/15/2015
 * Time: 4:03 PM
 */
class Authencication
{

    const IV = "1234567890111111";
    const SESSION_LIFE_TIME = 1800;
    const SESSION_NAME = "SESSIONID";
    const KEY = '5baa61e4c9b93f3f0682250b6cf8331b';

    public static function getSessionValue(User $u)
    {
//        return Authencication::encrypt($u->id, substr($u->password, 8)) . "." . substr(sha1(time()),30);
        return Authencication::encrypt($u->id . "_" . time());
    }

    public static function getUserId($session_id)
    {
//        return Authencication::decrypt(explode(".", $session_id)[0]);
        $plain_text = self::decrypt($session_id);
        $user_id = explode("_", $plain_text);
        return $user_id[0];

    }

    public static function  encrypt($plaintext)
    {
        $enc = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, Authencication::KEY,
            $plaintext, MCRYPT_MODE_CBC, Authencication::IV);
        return base64_encode($enc);
    }

    public static function  decrypt($ciphertext_dec)
    {
        $ciphertext_dec = base64_decode($ciphertext_dec);
        $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, Authencication::KEY,
            $ciphertext_dec, MCRYPT_MODE_CBC, Authencication::IV);
        return $plaintext_dec;
    }

    public static function  isLogIn($session_id)
    {
//        $use_id = Authencication::decrypt(explode(".", $session_id)[0]);
//        return $use_id > 0;
        $plain_text = self::decrypt($session_id);
        $user_id = explode("_", $plain_text);
        return $user_id[0] > 0;

    }

}

?>