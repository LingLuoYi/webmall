<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 3:14 PM
 */

require_once "./intercept/Intercept.php";
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

生成详情：
<form action="controller/NewHtmlController.php" method="post">
    名字：<input name="src" type="text"><br>
    名字：<input name="name" type="text"><br>
    <input type="submit" value="提交">
</form>

上传图片：
<form action="controller/UploadController.php" method="post" enctype="multipart/form-data">
    图片：<input type="file" name="file">
    类型：<input type="text" name="type">
    <input type="submit" value="提交">
</form>
添加用户：
<form action="controller/ProductsController.php" method="post">
    用户名：<input type="text" name="userName">
    密码：<input type="password" name="userPass">
    <input type="submit" value="提交">
</form>
</body>
</html>
