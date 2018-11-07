<?php
header("Cache-Control: no-cache, must-revalidate");
    $imgName = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $filePath =  '/var/www/html'.$_POST['filePath'];
    if(move_uploaded_file($tmp,$filePath)){
        echo '{"code": 0,"msg": "上传成功","data": {"src": "图片名称：'.$fileName.'；图片地址：'.$filePath.'"}}';
    }else{
        echo '{"code": 1,"msg": "上传失败","data": {"src": "文件名：'.$imgName.'；文件类型：'.$tmp.'；地址：'.$filePath.'"}}';;
    }
?>