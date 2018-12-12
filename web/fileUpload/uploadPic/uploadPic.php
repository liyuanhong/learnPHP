<?php

/**
 * Created by PhpStorm.
 * User: liyuanhong
 * Date: 2018/7/12
 * Time: 下午12:09
 */
class FileUpload
{
    function upload(){
        if ((($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/png")
                || ($_FILES["file"]["type"] == "image/jpg"))
            && ($_FILES["file"]["size"] < 200000))
        {
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else
            {
                echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                echo "Type: " . $_FILES["file"]["type"] . "<br />";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

                if(is_dir("upload")){

                }else{
                    mkdir("upload");
                }

                if (file_exists("upload/" . $_FILES["file"]["name"]))
                {
                    echo $_FILES["file"]["name"] . " already exists. ";
                }
                else
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"],
                        "upload/" . $_FILES["file"]["name"]);
                    echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
                    FileUpload::crop("upload/" . $_FILES["file"]["name"]);
                }
            }
        }
        else
        {
            echo "Invalid file";
        }
    }

    function crop($img_url){
        $img_info = getimagesize($img_url);
        print_r($img_info);
        $width = $img_info[0];
        $height = $img_info[1];

        $target_image = imagecreatefromjpeg($img_url);

        $cropped_image = imagecreatetruecolor(300, 300);

        imagecopy($cropped_image, $target_image, 0, 0,  0, 0,300,300);

        $randNumber = mt_rand(00000, 99999). mt_rand(000, 999);
        $fileName = substr(md5($randNumber), 8, 16) ."11111".".jpg";
        imagejpeg($cropped_image,'upload/'.$fileName);
        imagedestroy($target_image);
    }
}

FileUpload::upload();