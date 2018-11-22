<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 3:16 PM
 */

require_once "../intercept/Intercept.php";
require_once '../server/ProductsServer.php';

//商品
$pr = new ProductsServer();
if ($_POST['name'] != "") {
    if ($pr->add($_POST['name'], $_POST['img'], $_POST['state'], $_POST['details'], $_POST['type'])) {
        echo "添加成功";
    } else {
        echo "添加失败";
    }
}

//菜单
if ($_POST['code'] != "") {
    if ($pr->addMenu($_POST['code'], $_POST['nameMenu'])) {
        echo "添加成功";
    } else {
        echo "添加失败";
    }
}

//banner
if ($_POST['bannerUrl'] != "") {
    if ($pr->addBanner($_POST['bannerUrl'], $_POST['bannerAndUrl'], $_POST['bannerType'], $_POST['bannerName'])) {
        echo "添加成功";
    } else {
        echo "添加失败";
    }
}

//nav
if ($_POST['navname'] != ""){
    if ($pr->addNav($_POST['navname'],$_POST['navurl'],$_POST['navstate'],$_POST['navkey']))
        echo "添加成功";
    else
        echo "添加失败";
}
//文案
if ($_POST['otherkey'] != ""){
    if ($pr->addOther($_POST['otherkey'],$_POST['othervalue']))
        echo "添加成功";
    else
        echo "添加失败";
}

//图片
if ($_POST['imgname'] != ""){
    if ($pr->addImg($_POST['imgname'],$_POST['imgurl'],$_POST['imgouturl']))
        echo "添加成功";
    else
        echo "添加失败";
}

//写入用户
if ($_POST['userName'] != ""){
    $pass = $_POST['userPass'];
    for ($i=0;$i<1024;$i++){
        $pass = md5($pass);
    }
    if ($pr->addUser($_POST['userName'],$pass))
        echo "添加成功";
    else
        echo "添加失败";
}
