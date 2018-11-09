<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 3:16 PM
 */

require_once '../server/ProductsServer.php';

//商品
$name = $_POST['name'];
$img = $_POST['img'];
$state = $_POST['state'];
$details = $_POST['details'];
$type = $_POST['type'];

//菜单
$code = $_POST['code'];
$nameMenu = $_POST['nameMenu'];

//banner
$bannerUrl = $_POST['bannerUrl'];
$bannerAndUrl = $_POST['bannerAndUrl'];
$bannerType = $_POST['bannerType'];
$bannerName = $_POST['bannerName'];


$pr = new ProductsServer();
if ($name != "")
if ($pr->add($name,$img,$state,$details,$type)){
    echo "添加成功";
}else{
    echo "添加失败";
}

if ($code != "")
    if ($pr->addMenu($code,$nameMenu)){
        echo "添加成功";
    }else {
        echo "添加失败";
}

if ($bannerUrl != "")
    if ($pr->addBanner($bannerUrl,$bannerAndUrl,$bannerType,$bannerName)){
        echo "添加成功";
    }else{
        echo "添加失败";
    }
?>
<h1>全部商品</h1>
<?php
foreach ($pr->getAllProducts() as $prs){
    echo $prs->getName()."<br>";
    echo $prs->getImgUrl()."<br>";
    echo $prs->getState()."<br>";
    echo $prs->getDetails()."<br>";
    echo $prs->getCategory();
}
echo "<h1>菜单</h1>";
foreach ($pr->getAllMenu() as $prs){
    echo $prs->getCode()."<br>";
    echo $prs->getName()."<br>";
}
echo "<h1>banner</h1>";
foreach ($pr->getAllBanner() as $prs){
    echo $prs->getBannerUrl()."<br>";
    echo $prs->getUrl()."<br>";
    echo $prs->getType()."<br>";
    echo $prs->getName()."<br>";
}
?>
