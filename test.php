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
    名字：<input name="name" type="text"/>
    图片地址：<input name="img" type="text"/>
    状态：<input name="state" type="text" />
    详情页面：<input name="details" type="text" />
    类型：<input name="type" type="text" />
    <input type="submit" value="提交">
</form>
</body>
</html>
