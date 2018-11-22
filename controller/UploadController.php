<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/16
 * Time: 5:14 PM
 */
header("Cache-Control: no-cache, must-revalidate");
require_once "../intercept/Intercept.php";
$type = $_POST['type'];
 if ($_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/jpg" || $_FILES['file']['type'] == "image/png" || ($_FILES["file"]["type"] == "image/pjpeg")){
     $imgName = $_FILES['file']['name'];
     $tmp = $_FILES['file']['tmp_name'];
     $filePath =  '/var/www/html/image/'.$type.'/'.$imgName;
     if(move_uploaded_file($tmp,$filePath)){
         echo '{"code": 0,"msg": "上传成功","data": {"src": "图片名称：'.$imgName.'；图片地址：'.$filePath.'"}}';
     }else{
         echo '{"code": 1,"msg": "上传失败","data": {"src": "文件名：'.$imgName.'；文件类型：'.$tmp.'；地址：'.$filePath.'"}}';;
     }
 }else{
     echo '{"code": 1,"msg": "格式不支持","data": "文件类型：'.$_FILES['file']['type'].'"}';
 }