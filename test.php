<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 3:14 PM
 */

require_once "./db/objectdb.php";
?>
<html>
<head>
    <title>这是标题</title>
</head>
<body>
添加商品：
<form action="./controller/ProductsController.php" method="post">
    名字：<input name="name" type="text"/><br>
    图片地址：<input name="img" type="text"/><br>
    状态：<input name="state" type="text" /><br>
    详情页面：<input name="details" type="text" /><br>
    类型：<input name="type" type="text"/><br>
    <input type="submit" value="提交">
</form>

添加菜单：
<form action="controller/ProductsController.php" method="post">
    英文名：<input name="code" type="text" /><br>
    中文名：<input name="nameMenu" type="text"/><br>
    <input type="submit" value="提交">
</form>

添加轮播图：
<form action="controller/ProductsController.php" method="post">
    bannerUrl：<input name="bannerUrl" type="text" /><br>
    bannerAndUrl：<input name="bannerAndUrl" type="text"/><br>
    bannerType：<input name="bannerType" type="text"><br>
    bannerName：<input name="bannerName" type="text"><br>
    <input type="submit" value="提交">
</form>

添加导航：
<form action="controller/ProductsController.php" method="post">
    名称：<input name="navname" type="text"><br>
    链接：<input name="navurl" type="text"><br>
    状态：<input name="navstate" type="text"><br>
    key：<input name="navkey" type="text"><br>
    <input type="submit" value="提交">
</form>

添加文案：
<form action="controller/ProductsController.php" method="post">
    key：<input name="otherkey" type="text"><br>
    内容：<input name="othervalue" type="text"><br>
    <input type="submit" value="提交">
</form>

添加图片：
<form action="controller/ProductsController.php" method="post">
    名字：<input name="imgname" type="text"><br>
    地址：<input name="imgurl" type="text"><br>
    外链地址：<input name="imgouturl" type="text"><br>
    <input type="submit" value="提交">
</form>
</body>
</html>
