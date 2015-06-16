<?php

/**
 * Created by PhpStorm.
 * User: HP 800
 * Date: 5/15/2015
 * Time: 2:05 PM
 */
class User
{
    public $id = -1;
    public $username = "";
    public $password = "";
    public $display_name = "";
    public $email = "";
    public $avatar = "";
    public $created_date = 0;
    public $status = 0;
    public $updated_date = 0;

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

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
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * @param string $display_name
     */
    public function setDisplayName($display_name)
    {
        $this->display_name = $display_name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function setPasswordHash()
    {
        $password_hash = sha1($this->username . $this->password . $this->created_date);
        $this->password = $password_hash;
    }

    public function validPasswordHash($password)
    {
        return sha1($this->username . $password . $this->created_date) == $this->password;
    }

}

abstract class USER_ERROR
{
    const ERR_USERNAME_EXIST = "Username exists.";
    const ERR_USERNAME_MANDATORY = "The max length of username is 100 characters.";
    const ERR_USERNAME_EMPTY = "Username must be filled out.";
    const ERR_DISPLAY_NAME_EMPTY = "Display name must be filled out.";
    const ERR_DISPLAY_NAME_MANDATORY = "The max length of display name is 100 characters.";
    const ERR_PASSWORD_MANDATORY = "The max length of password is 20 characters.";
    const ERR_EMAIL_MANDATORY = "The max length of email is 100 characters.";
    const ERR_PASSWORD_NOT_MATCH = "Password and confirm password are not match.";
    const ERR_CREATE_USER = "Creating user failed";
    const ERR_INCORRECT_USER = "Incorrect username or password.";
    const ERR_INVALID_AVATAR = "Uploaded file is invalid.";
    const ERR_UPLOAD_AVATAR = "Sorry, there was an error uploading your file.";
    const ERR_MODIFY_ACCOUNT = "Sorry, there was an error modifying your account.";
    const ERR_INVALID_EMAIL = "Invalid email.";
    const ERR_INVALID_CURRENT_PASSWORD = "Invalid current password.";
    const ERR_IMAGE_SIZE = "Image size less than 1M.";
    const ERR_SESSION_TIMEOUT = "1342443ef5df524dd1c07de9fd789bb0";

    const SUCCESS_MODIFY_ACCOUNT = "Your account has been updated.";
    const SUCCESS_CREATE_USER = "Account have been created successfully. Please log in.";
    const SUCCESS_CHANGE_PASSWORD = "Your password has been updated.";

    const CONST_USER_MAX_LENGTH = 100;
    const CONST_USER_PASSWORD_MAX_LENGTH = 20;
}

?>