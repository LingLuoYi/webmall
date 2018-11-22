<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/19
 * Time: 4:31 PM
 */

require_once "../intercept/Intercept.php";
$path = '/var/www/html';

$type = $_POST['type'];

$name = $_POST['name'];

if ($name == ""){
    echo '{"code":1,"msg":"没有文件名"}';
}
$src = $path.''.$name;
if (unlink($src))
    echo '{"code":0,"msg":"成功"}';
else
    echo '{"code":0,"msg":"失败","data":"'.$src.'"}';