<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/19
 * Time: 3:37 PM
 */

session_start();

if (isset($_SESSION['token'])){
    unset($_SESSION['token']);
    echo '{"code":0,"msg":"注销成功"}';
}else{
    echo '{"code":0,"msg":"虽然你没有登陆，但我还是执行了注销"}';
}