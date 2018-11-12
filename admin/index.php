<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 4:58 PM
 */
header("Content-type: text/html; charset=utf-8");
require_once '../server/ProductsServer.php';
$pr = new ProductsServer();
$menu = $pr->getAllMenu();
$dir = dirname(__FILE__) . "/img/products/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎你</title>
    <link rel='stylesheet' type="text/css" href='//layui.hcwl520.com.cn/layui-v2.4.3/css/layui.css?v=201809030202'>
    <style>
        .select{
            position: absolute;
            top: 100px;
            right: 15%;
        }
        .select.card{
            top: 150px;
            width: 750px;
            height: auto;
            left: 910px;
        }
        .select.card2{
            top: 354px;
            width: 750px;
            height: auto;
            left: 910px;
        }
        .layui-form-mid{
            padding: 0px !important;
        }
    </style>
</head>
<body>
<!--导航-->
<ul class="layui-nav">
    <li class="layui-nav-item layui-this"><a href="javascript:;">页面修改</a></li>
    <li class="layui-nav-item"><a href="javascript:;">页眉页脚</a></li>
    <li class="layui-nav-item"><a href="javascript:;">图片库</a></li>
    <li class="layui-nav-item"><a href="javascript:;">文案库</a></li>
    <li class="layui-nav-item">
        <a href="javascript:;">Linglouyi</a>
        <dl class="layui-nav-child">
            <dd><a href="">修改密码</a></dd>
            <dd><a href="">退出</a></dd>
        </dl>
    </li>
</ul>

<!--首页修改-->
<!--预览-->
<div id="yu">
<iframe width="900px" height="1150px" src="../index.php"></iframe>
</div>

<!--页面选择-->
<div class="layui-form select" >
    <div class="layui-form-item">
        <label class="layui-form-label">选择页面</label>
        <div class="layui-input-block">
         <select name="city" lay-filter="page">
         <option value="index.php">首页</option>
         <option value="productShow.php">热销产品</option>
         <option value="allProducts.php">全部产品</option>
         <option value="aboutUs.php">关于我们</option>
         <option value="contactUs.php">联系我们</option>
         </select>
        </div>
    </div>
</div>

<div id="index">
<!--主页修改面板-->
<div class="layui-card select card">
    <div class="layui-card-header">主页展示图</div>
    <div class="layui-card-body">
        <div class="banners">
            <div class="layui-form-item">
            <label class="layui-form-label">标题图片：</label>
                <div class="layui-input-inline" style="width: 526px">
                    <input type="text" name="title" lay-verify="required" value="<?php foreach ($pr->getAllBanner() as $prm){ if ($prm->getType() == "index1"){ echo $prm->getBannerUrl();}}?>" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid"><button class="layui-btn">修改</button></div>
            </div>
            <button class="layui-btn layui-btn-fluid">点击选择图片</button>
        </div>
    </div>
</div>

<!--主页修改面板2-->
<div class="layui-card select card2 index">
    <div class="layui-card-header">主页产品展示</div>
    <div class="layui-card-body">
        <div class="banners">
            <table class="layui-table">
                <colgroup>
                    <col width="150">
                    <col width="200">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>图片URL</th>
                    <th>外链URL</th>
                    <th>图片名称</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($pr->getAllBanner() as $banner) {
                    if ($banner->getType() == "index2") {
                        echo '<tr>';
                        echo '<td>'.$banner->getUrl().'</td>';
                        echo '<td>'.$banner->getBannerUrl().'</td>';
                        echo '<td>'.$banner->getName().'</td>';
                        echo '<td><button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe642;</i></button></td>';
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

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

    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
        form.on('select(page)',function (data) {
            console.log(data.value);
            send(data.value);
            if (data.value === "index.php") {
                $("#index").show();
            }else if ("productShow.php"){
                $("#index").hide();
            }else if ("productShow.php"){
                $("#index").hide();
            }else if ("allProducts.php"){
                $("#index").hide();
            }else if ("aboutUs.php"){
                $("#index").hide();
            }else if("contactUs.php"){
                $("#index").hide();
            }
        })
    });
    function send(zch){
        $("#yu iframe").attr("src", '../'+zch);
    }
</script>
</body>
</html>
