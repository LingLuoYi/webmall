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

//导航
$navname = $_POST['navname'];
$navurl = $_POST['navurl'];
$navstate = $_POST['navstate'];
$navkey = $_POST['navkey'];

//文案
$okey = $_POST['otherkey'];
$ovalue = $_POST['othervalue'];

//图片
$imgname = $_POST['imgname'];
$imgurl = $_POST['imgurl'];
$imgouturl = $_POST['imgouturl'];


$pr = new ProductsServer();
if ($name != "") {
    if ($pr->add($name, $img, $state, $details, $type)) {
        echo "添加成功";
    } else {
        echo "添加失败";
    }
}

if ($code != "") {
    if ($pr->addMenu($code, $nameMenu)) {
        echo "添加成功";
    } else {
        echo "添加失败";
    }
}

if ($bannerUrl != "") {
    if ($pr->addBanner($bannerUrl, $bannerAndUrl, $bannerType, $bannerName)) {
        echo "添加成功";
    } else {
        echo "添加失败";
    }
}

if ($navkey != ""){
    if ($pr->addNav($navname,$navurl,$navstate,$navkey))
        echo "添加成功";
    else
        echo "添加失败";
}
if ($okey != ""){
    if ($pr->addOther($okey,$ovalue))
        echo "添加成功";
    else
        echo "添加失败";
}

if ($imgname != ""){
    if ($pr->addImg($imgname,$imgurl,$imgouturl))
        echo "添加成功";
    else
        echo "添加失败";
}
?>
<h1>全部商品</h1>
<?php
foreach ($pr->getAllProducts() as $prs){
    echo "商品名称：".$prs->getName()."  图片地址：";
    echo $prs->getImgUrl()."  商品状态：";
    echo $prs->getState()."  详情页面：";
    echo $prs->getDetails()."  分类：";
    echo $prs->getCategory()."<br>";
}
echo "<h1>菜单</h1>";
foreach ($pr->getAllMenu() as $prs){
    echo "英文名：".$prs->getCode()."  中文名：";
    echo $prs->getName()."<br>";
}
echo "<h1>banner</h1>";
foreach ($pr->getAllBanner() as $prs){
    echo "轮播图地址：".$prs->getBannerUrl()."  链接地址：";
    echo $prs->getUrl()."  类型：";
    echo $prs->getType()."  名称：";
    echo $prs->getName()."<br>";
}
echo "<h1>导航</h1>";
foreach ($pr->getAllNav() as $prs){
    echo "名称：".$prs->getName()."  链接：".$prs->getUrl()."  状态：".$prs->getState()."  key:".$prs->getKey()."<br>";
}

echo "<h1>文案列表</h1>";
foreach($pr->getAllOther() as $prs){
    echo "文案内容：".$prs."<br>";
}

echo "<h1>图片列表</h1>";
foreach ($pr->getAllImg() as $prs){
    echo "图片名称：".$prs->getName()."图片地址：".$prs->getUrl()."外链地址：".$prs->getOutUrl()."<br>";
}
?>
