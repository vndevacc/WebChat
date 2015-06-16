<?php
/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/18/2015
 * Time: 9:44 AM
 */

if(isset($_COOKIE["SESSIONID"])) {
    setcookie("SESSIONID", "", 0);
}
header("Location: signin.php" );
?>