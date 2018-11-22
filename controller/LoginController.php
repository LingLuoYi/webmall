<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/19
 * Time: 10:59 AM
 */
require_once "../server/ProductsServer.php";
require_once "./util/DES.php";
$pr = new ProductsServer();
//开启session
session_start();

$userName = $_POST['username'];
$userpass = $_POST['userpass'];

//验证密码
for ($i=0;$i<1024;$i++){
    $userpass = md5($userpass);
}

if ($userpass == $pr->getUser($userName)){
    //生成token
    $token = '{"user":"'.$userName.'","date":"'.$_SERVER['REQUEST_TIME'].'","ip":"'.$_SERVER["REMOTE_ADDR"].'"}';
    //加密
    $des = new Des();
    $tokens = $des->encrypt($token,"szhl123456");
    $_SESSION['token'] = $tokens;
//    echo '{"code":0,"msg":"登陆成功"}';
    header("location:../admin/index.php");
}else{
//    echo '{"code":1,"msg":"登陆失败"}';
    header("location:../admin/login/login.html");
}