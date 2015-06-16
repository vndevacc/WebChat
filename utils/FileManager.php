<?php

class FileManager
{
    const DEFAULT_AVATAR = "../public/images/default.jpg";
    const DEFAULT_GROUP = "../public/images/group.png";

    public static function validImageFile($file, &$target_file)
    {
        if (isset($file["name"]) && ($file["name"]) != "") {
            $target_dir = "../public/images/";
            $target_file = $target_dir . basename($file["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($file["tmp_name"]);
            if ($check == false) {
                return USER_ERROR::ERR_INVALID_AVATAR;
            }

//            if (file_exists($target_file)) {
//                return USER_ERROR::ERR_INVALID_AVATAR;
//            }
            if ($file["size"] > 1024*1024) {
                return USER_ERROR::ERR_IMAGE_SIZE;
            }
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                return USER_ERROR::ERR_INVALID_AVATAR;
            }

            $target_file = $target_dir . microtime(false) . "." . $imageFileType;
            $target_file = str_replace(" ", "-", $target_file);
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                "";
            } else {
                return USER_ERROR::ERR_UPLOAD_AVATAR;
            }

        } else {
            return "";
        }

    }

}

?>