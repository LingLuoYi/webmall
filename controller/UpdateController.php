<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/17
 * Time: 4:48 PM
 */
require_once "../intercept/Intercept.php";
require_once "../server/ProductsServer.php";

$pr = new ProductsServer();

//菜单开关
if ($_POST['navkey'] != ""){
    $nav = $pr->getOneNav($_POST['navkey']);
    if ($pr->addNav($nav->getName(),$nav->getUrl(),$_POST['navstate'],$nav->getKey()))
        echo "导航操作成功";
    else
        echo "失败";
}

//商品开关
if ($_POST['proname'] != ""){
    $pro = $pr->getOneProducts($_POST['proname']);
    if ($pr->add($pro->getName(),$pro->getImgUrl(),$_POST['prostate'],$pro->getDetails(),$pro->getCategory()))
        echo "商品操作成功";
    else
        echo "失败";
}
