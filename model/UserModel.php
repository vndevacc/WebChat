<?php
/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/15/2015
 * Time: 2:04 PM
 */
require_once('../dto/User.php');
require_once('../utils/Connection.php');

class UserModel
{

    public static function addUser(User $user)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare('SELECT username FROM user WHERE username = ?');
        if ($statement->execute(array($user->username))) {
            $existUsername = $statement->rowCount();
            if ($existUsername > 0)
                return USER_ERROR::ERR_USERNAME_EXIST;
        }


        $statement = $connection->prepare("INSERT INTO user (username,display_name, password, email, avatar, status, created_date, updated_date)
 VALUES (?,?, ?, ?, ?, ?, ?, ?)");
        $i = 1;
        $statement->bindValue($i++, $user->username);
        $statement->bindValue($i++, $user->display_name);
        $statement->bindValue($i++, $user->password);
        $statement->bindValue($i++, $user->email);
        $statement->bindValue($i++, $user->avatar);
        $statement->bindValue($i++, $user->status);
        $statement->bindValue($i++, $user->created_date);
        $statement->bindValue($i++, $user->updated_date);
        if ($statement->execute())
            return USER_ERROR::SUCCESS_CREATE_USER;
        return USER_ERROR::ERR_CREATE_USER;;
    }

    public static function getUser($username)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare('SELECT * FROM user WHERE username = ? and status=1');
        if ($statement->execute(array($username))) {
            $existUsername = $statement->rowCount();
            if ($existUsername <= 0)
                return false;
            else {
                $user_result = new User();
                foreach ($statement->FetchAll() as $user) {
                    $user_result->id = $user["id"];
                    $user_result->username = $user["username"];
                    $user_result->display_name = $user["display_name"];
                    $user_result->password = $user["password"];
                    $user_result->email = $user["email"];
                    $user_result->avatar = $user["avatar"];
                    $user_result->status = $user["status"];
                    $user_result->created_date = $user["created_date"];
                    $user_result->updated_date = $user["updated_date"];
                }
                return $user_result;
            }
        }
    }

    public static function getUserById($id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare('SELECT * FROM user WHERE id = ? and status=1');
        if ($statement->execute(array($id))) {
            $existUsername = $statement->rowCount();
            if ($existUsername <= 0)
                return false;
            else {
                $user_result = new User();
                foreach ($statement->FetchAll() as $user) {
                    $user_result->id = $user["id"];
                    $user_result->username = $user["username"];
                    $user_result->display_name = $user["display_name"];
                    $user_result->password = $user["password"];
                    $user_result->email = $user["email"];
                    $user_result->avatar = $user["avatar"];
                    $user_result->status = $user["status"];
                    $user_result->created_date = $user["created_date"];
                    $user_result->updated_date = $user["updated_date"];
                }
                return $user_result;
            }
        }
    }

    public static function updateUser(User $user)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("UPDATE user SET  display_name=?,password=?, email=?, avatar=?, status=?, updated_date=? WHERE id=?");
        $i = 1;
        $statement->bindValue($i++, $user->display_name);
        $statement->bindValue($i++, $user->password);
        $statement->bindValue($i++, $user->email);
        $statement->bindValue($i++, $user->avatar);
        $statement->bindValue($i++, $user->status);
        $statement->bindValue($i++, $user->updated_date);
        $statement->bindValue($i++, $user->id);
        if ($statement->execute())
            return USER_ERROR::SUCCESS_MODIFY_ACCOUNT;
        return USER_ERROR::ERR_MODIFY_ACCOUNT;
    }


    public static function getAll()
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare('SELECT * FROM user WHERE status=1');
        if ($statement->execute()) {
            $existUsername = $statement->rowCount();
            if ($existUsername <= 0)
                return false;
            else {
                $user_array = array();
                foreach ($statement->FetchAll() as $user) {
                    $user_result = new User();
                    $user_result->id = $user["id"];
                    $user_result->username = $user["username"];
                    $user_result->display_name = $user["display_name"];
                    $user_result->password = $user["password"];
                    $user_result->email = $user["email"];
                    $user_result->avatar = $user["avatar"];
                    $user_result->status = $user["status"];
                    $user_result->created_date = $user["created_date"];
                    $user_result->updated_date = $user["updated_date"];
                    array_push($user_array, $user_result);
                }
                return $user_array;
            }
        }
    }

    public static function find($string, $id)
    {
        $connection = Connection::getInstance();
        $statement = $connection->prepare("SELECT * FROM user WHERE display_name like ? AND id <> ?  AND status=1");
        $statement->bindValue(1, "%" . $string . "%");
        $statement->bindValue(2, $id);
        if ($statement->execute()) {
            $existUsername = $statement->rowCount();
            if ($existUsername <= 0)
                return false;
            else {
                $user_array = array();
                foreach ($statement->FetchAll() as $user) {
                    $user_result = new User();
                    $user_result->id = $user["id"];
                    $user_result->username = $user["username"];
                    $user_result->display_name = $user["display_name"];
                    $user_result->password = $user["password"];
                    $user_result->email = $user["email"];
                    $user_result->avatar = $user["avatar"];
                    $user_result->status = $user["status"];
                    $user_result->created_date = $user["created_date"];
                    $user_result->updated_date = $user["updated_date"];
                    array_push($user_array, $user_result);
                }
                return $user_array;
            }
        }
    }

    public static function getUsers($array_ids)
    {
        $connection = Connection::getInstance();
        $clause = implode(',', array_fill(0, count($array_ids), '?'));
        $statement = $connection->prepare("SELECT * FROM user WHERE id in (" . $clause . ")");
        if ($statement->execute($array_ids)) {
            $existUsername = $statement->rowCount();
            if ($existUsername <= 0)
                return false;
            else {
                $user_array = array();
                foreach ($statement->FetchAll() as $user) {
                    $user_result = new User();
                    $user_result->id = $user["id"];
                    $user_result->username = $user["username"];
                    $user_result->display_name = $user["display_name"];
                    $user_result->password = $user["password"];
                    $user_result->email = $user["email"];
                    $user_result->avatar = $user["avatar"];
                    $user_result->status = $user["status"];
                    $user_result->created_date = $user["created_date"];
                    $user_result->updated_date = $user["updated_date"];
                    array_push($user_array, $user_result);
                }
                return $user_array;
            }
        }
    }


}

?>