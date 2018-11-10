<!DOCTYPE html> <!-- 使用 HTML5 doctype，不区分大小写 -->
<html lang="zh-cmn-Hans"> <!-- 更加标准的 lang 属性写法 http://zhi.hu/XyIa -->
<head>
    <!-- 声明文档使用的字符编码 -->
    <meta charset='utf-8'>
    <!-- 优先使用 IE 最新版本和 Chrome -->
    <script src='http://libs.baidu.com/jquery/2.1.1/jquery.min.js'></script>
    <link rel='stylesheet' type="text/css" href='//layui.hcwl520.com.cn/layui-v2.4.3/css/layui.css?v=201809030202'>
    <script src='//layui.hcwl520.com.cn/layui-v2.4.3/layui.js?v=201809030202'></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Backstage</title>
</head>
<body>
<h3>修改商品</h3>
<head>
<style type="text/css">
/** 重置浏览器默认标签样式 */
body,ul,li{margin:0;padding:0;}
.xttblog{
 width: 1200px;
 height: 170px;
 margin-top:50px;
 margin-left: auto;
 margin-right: auto;
}
.box{margin-left: 5px;margin-top: 5px;list-style-type:none;}
.box:after{
 content: ".";
 display: block;
 line-height: 0;
 width:0;
 height: 0;
 clear: both;
 visibility: hidden;
 overflow: hidden;
}
.box li{float:left;line-height: 230px;}
.box li a,.box li a:visited{
 display:block;
 border: 5px solid #ccc;
 width: 380px;
 height: 230px;
 text-align: center;
 margin-left: -5px;
 margin-top: -5px;
 position: relative;
 z-index: 1;
}
.box li a:hover{border-color: #f00;z-index: 2;}
</style>
</head>
<body>
<div class="xttblog">
<ui class="box">
<li style = "list-style-type :none;"><a id = "/var/www/html/img" href = "javascript:" onclick = "cnm(this.id)">目录：/var/www/html/img</a></li>
<li style = "list-style-type :none;"><a id = "/var/www/html/productItems/img" href = "javascript:" onclick = "cnm(this.id)">目录：/var/www/html/productItems/img</a></li>
<?php
 function read_all ($dir){
     if(!is_dir($dir)) return false;

     $handle = opendir($dir);

     if($handle){
         while(($fl = readdir($handle)) !== false){
             $temp = $dir.DIRECTORY_SEPARATOR.$fl;
             if(is_dir($temp) && $fl!='.' && $fl != '..'){
                 echo '<li style = "list-style-type :none;"><a id = "'.$temp.'" href = "javascript:" onclick = "cnm(this.id)">目录：'.$temp;
                 echo '</a></li>';
                 read_all($temp);
             }else{
//                 if($fl!='.' && $fl != '..'){
//                     echo '<li style = "list-style-type :none;"><img height="207" width="277" src = "'.str_replace("/var/www/html","",$temp).'"/></li>';
//                 }
             }
        }
     }
}
read_all('/var/www/html/img');
?>
</ui>
</div>
<script>
layui.use('layer', function(){
 var layer = layui.layer;
 });
function cnm(id){
console.log(id);
var user = '<div class="layui-form-item"><label class="layui-form-label">叫什么</label><div class="layui-input-block"><input type="text" name="user" required lay-verify="required" placeholder="皇上，您的名字" autocomplete="off" class="layui-input"></div></div>';
var pass = '<div class="layui-form-item"><label class="layui-form-label">钥匙</label><div class="layui-input-block"><input type="password" name="pass" required lay-verify="required" placeholder="皇上，您的密码" autocomplete="off" class="layui-input"></div></div>'
var sub = ' <div class="layui-form-item"><div class="layui-input-block"><button class="layui-btn" lay-submit lay-filter="formDemo">登录吧</button><button type="reset" class="layui-btn layui-btn-primary">重置</button></div></div>';
var javascripts ="<script>layui.use('form', function(){var form = layui.form;form.on('submit(formDemo)', function(data){layer.msg(啦啦啦啦啦啦啦啦拉拉啦啦啦啦);});<\/script>";
var url = '/modify.php?'+id;
var html = '<form class="layui-form" method = "post" action="'+url+'">'+user+''+pass+''+sub+''+javascripts+'</form>';
layer.open({
  type: 1,
  skin: 'layui-layer-rim', //加上边框
  area: ['420px', '240px'], //宽高
  content: html
});
}
</script>
</body>
</html>