<?php

class Connection
{
    private static $CONNECTION_STRING = "mysql:dbname=web_chat;host=localhost;port=3306";
    private static $USERNAME = "root";
    private static $PASSWORD = "root";
    private  static  $CONNECTION = false;

    public static function getInstance(){
        try {
            if(!Connection::$CONNECTION) {
                Connection::$CONNECTION = new PDO(Connection::$CONNECTION_STRING, Connection::$USERNAME, Connection::$PASSWORD);
                Connection::$CONNECTION->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            }
            return Connection::$CONNECTION;
        } catch(PDOException $e) {
            die('Could not connect to the database:<br/>' . $e);
        }
        return false;
    }


}

?>