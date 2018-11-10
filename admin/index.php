<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 4:58 PM
 */
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎你</title>
    <link rel='stylesheet' type="text/css" href='//layui.hcwl520.com.cn/layui-v2.4.3/css/layui.css?v=201809030202'>

</head>
<body>
<!--导航-->
<ul class="layui-nav">
    <li class="layui-nav-item"><a href="javascript:;">首页</a></li>
    <li class="layui-nav-item"><a href="javascript:;">热销产品</a></li>
    <li class="layui-nav-item"><a href="javascript:;">全部商品</a></li>
    <li class="layui-nav-item"><a href="javascript:;">关于我们</a></li>
    <li class="layui-nav-item"><a href="javascript:;">联系我们</a></li>
    <li class="layui-nav-item layui-this">
        <a href="javascript:;">Linglouyi</a>
        <dl class="layui-nav-child">
            <dd><a href="">修改密码</a></dd>
            <dd><a href="">图片库</a></dd>
            <dd><a href="">退出</a></dd>
        </dl>
    </li>
</ul>

<button class="layui-btn" onclick="update()">更新</button>
<!--首页修改-->
<!--预览-->
<div class="content-wrapper"style="width: 500px;height: 800px" ></div>

<script src='http://libs.baidu.com/jquery/2.1.1/jquery.min.js'></script>
<script src='//layui.hcwl520.com.cn/layui-v2.4.3/layui.js?v=201809030202'></script>
<script >
    layui.use('layer', function(){
        var layer = layui.layer;
    });

    layui.use('element', function(){
        var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块

        //监听导航点击
        element.on('nav(demo)', function(elem){
            //console.log(elem);
            layer.msg(elem.text());
        });
    });

    function update(){
        $.ajax({
            url: "../index.php",
            type:"get",
            data:{
                code:"../"
            },
            dataType:"html",
            success:function(data){
                $(".content-wrapper").html(data)
            }
        });
    }
</script>
</body>
</html>
