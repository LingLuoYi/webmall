<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/16
 * Time: 9:38 PM
 */

//开启session
session_start();

//session_id 以后做缓存用，现在不搞
$session = session_id();


//鉴权开始
//获取session中的token,暂时不鉴权
if (!isset($_SESSION['token'])){
    echo '{"code": 0,"msg": "没有登陆"}';
    header("location:login/login.html");
    return ;
}

