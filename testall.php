<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/17
 * Time: 11:40 PM
 */
require_once "./db/objectdb.php";

//test
$dbhandle = objectdb::defaultdb('/var/www/html/db/dataDB/other.db');
if (!$dbhandle) {
    echo "init failure!";
    exit();
}

echo "start <br>";
var_dump($dbhandle->getAll());

echo "<br>add 1 <br>";
$dbhandle->setValueForKey("baidu","www.baidu.com");
$dbhandle->setValueForKey("qq","www.qq.com");
$dbhandle->setValueForKey("taobao","www.taobao.com");
var_dump($dbhandle->getAll());

echo "<br>mod 1 <br>";
$dbhandle->setValueForKey("baidu","http://www.baidu.com");
var_dump($dbhandle->getAll());


echo "<br>get 1 <br>";
echo $dbhandle->getValueForKey("baidu");


echo "<br>get 1 <br>";
var_dump($dbhandle->getAllKey());

echo "<br>del 1 <br>";
var_dump($dbhandle->removeValueForKey('baidu'));

echo "<br>get 1 <br>";
var_dump($dbhandle->getAll());

//echo "<br>clear 1 <br>";
//$dbhandle->cleardb();
//
//echo "<br>get 1 <br>";
//var_dump($dbhandle->getAll());