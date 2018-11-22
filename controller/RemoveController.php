<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/17
 * Time: 10:04 AM
 */
header('Access-Control-Allow-Origin:*');
require_once "../intercept/Intercept.php";
require_once "../server/ProductsServer.php";
$pr = new ProductsServer();

$type = $_POST['type'];
$key = $_POST['key'];

if ($type == "banner"){
    $pr->deleteBanner($key);
    echo "banner操作".$key;
}

if ($type == "img"){
    $pr->deleteImg($key);
    echo $key;
}

if ($type == "menu"){
    $pr->deleteMenu($key);
    echo $key;
}

if ($type == "nav"){
    $pr->deleteNav($key);
    echo $key;
}
//
if ($type == "pro"){
    $pr->deleteProducts($key);
    echo $key;
}