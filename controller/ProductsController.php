<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 3:16 PM
 */

require_once '../server/ProductsServer.php';
$name = $_POST['name'];
$img = $_POST['img'];
$state = $_POST['state'];
$details = $_POST['details'];
$type = $_POST['type'];

echo $name."<br>";
echo $img."<br>";
echo $state."<br>";
echo $details."<br>";
$pr = new ProductsServer();
if ($name != "")
if ($pr->add($name,$img,$state,$details,$type)){
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
?>
