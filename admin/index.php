<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 4:58 PM
 */
header("Content-type: text/html; charset=utf-8");
require_once "../intercept/Intercept.php";
require_once "../server/ProductsServer.php";
$pr = new ProductsServer();
$menu = $pr->getAllMenu();
$dir = dirname(__FILE__) . "/img/products/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎你</title>
    <link rel='stylesheet' type="text/css" href='../css/layui/css/layui.css'>
    <style>
        /** {box-sizing: border-box;}*/
        .admin{
            position: absolute;
            top: 140px;
            margin-left: 910px;
        }
        .select{
            position: absolute;
            top: 100px;
            right: 15%;
        }
        .layui-form-mid{
            padding: 0px !important;
        }
        .img-table-col{
            overflow: hidden;
        }
        img{
            width:auto;
            height:auto;
            max-width:100%;
            max-height:100%;
        }
        .img-table-row .img-table-col{
            float: left;
            border: 10px solid #fff1ef;
        }
        .layui-form-label{
            width: auto;
        }
    </style>
</head>
<body>
<!--导航-->
<ul class="layui-nav" lay-filter="nav" >
    <li id="layui-nav-1" class="layui-nav-item layui-this"><a href="javascript:;">页面修改</a></li>
    <li id="layui-nav-2" class="layui-nav-item"><a href="javascript:;">页眉页脚</a></li>
    <li id="layui-nav-3" class="layui-nav-item"><a href="javascript:;">图片库</a></li>
    <li id="layui-nav-4" class="layui-nav-item"><a href="javascript:;">文案库</a></li>
    <li id="layui-nav-5" class="layui-nav-item"><a href="javascript:;">详情页</a></li>
    <li id="layui-nav-6" class="layui-nav-item">
        <a href="javascript:;">Linglouyi</a>
        <dl class="layui-nav-child">
            <dd><a href="javascript:;" onclick="passupdate()">修改密码</a></dd>
            <dd><a href="javascript:;" onclick="outLogin()">退出</a></dd>
        </dl>
    </li>
</ul>


<!--页面修改-->
<div id="page">
<!--页面修改-->
<!--预览-->
<div id="yu">
<iframe width="900px" onload="this.height=this.contentWindow.document.body.scrollHeight" src="../index.php"></iframe>
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

<!--页面修改start-->
<div class="admin" id="index">
<!--主页修改面板-->
<div class="layui-card">
    <div class="layui-card-header">主页展示图</div>
    <div class="layui-card-body">
            <div class="layui-form-item">
            <label class="layui-form-label">标题图片：</label>
                <div class="layui-input-inline" style="width: 526px">
                    <input type="text" id="indexbanner" name="title" lay-verify="required" value="<?php echo $pr->getOneImg('首页')->getUrl()?>" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid"><button onclick="imgUpdate('首页','indexbanner')" class="layui-btn">修改</button></div>
            </div>
            <button class="layui-btn layui-btn-fluid" onclick="img('indexbanner')">点击选择图片</button>
    </div>
</div>

<!--主页修改面板2-->
<div class="layui-card index">
    <div class="layui-card-header">主页产品展示</div>
    <div class="layui-card-body">
        <div class="banners">
            <table id="banner1" class="layui-table" lay-size="sm">
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
                        echo '<td>'.$banner->getBannerUrl().'</td>';
                        echo '<td>'.$banner->getUrl().'</td>';
                        echo '<td>'.$banner->getName().'</td>';
                        echo '<td><button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe642;</i></button></td>';
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
            <button class="layui-btn layui-btn-fluid" onclick="addBanner('banner1','index2')">添加轮播图</button>
        </div>
    </div>
</div>
</div>

<div class="admin" id="productShow">
    <div class="layui-card">
        <div class="layui-card-header">展示图</div>
        <div class="layui-card-body">
            <div class="banners">
                <div class="layui-form-item">
                    <label class="layui-form-label">标题图片：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="titleshow" type="text" name="title" lay-verify="required" value="<?php $img = $pr->getOneImg("热销1"); echo $img->getUrl()?>" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid"><button onclick="imgUpdate('热销1','titleshow')" class="layui-btn">修改</button></div>
                </div>
                <button class="layui-btn layui-btn-fluid" onclick="img('titleshow')">点击选择图片</button>
            </div>
        </div>
    </div>

    <div class="layui-card">
        <div class="layui-card-header">主体图</div>
        <div class="layui-card-body">
            <div class="banners">
                <div class="layui-form-item">
                    <label class="layui-form-label">主体图片：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="mainshow" type="text" name="title" lay-verify="required" value="<?php  echo $pr->getOneImg("热销2")->getUrl(); ?>" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid"><button onclick="imgUpdate('热销2','mainshow')" class="layui-btn">修改</button></div>
                </div>
                <button class="layui-btn layui-btn-fluid" onclick="img('mainshow')">点击选择图片</button>
            </div>
        </div>
    </div>

</div>

<div class="admin" id="allProducts">
    <div class="layui-card ">
        <div class="layui-card-header">公告</div>
        <div class="layui-card-body">
            <div class="banners">
                <div class="layui-form-item">
                    <label class="layui-form-label">公告内容：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="notice" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneOther("Notice")?>" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid"><button onclick="wUpdate('Notice','notice')" class="layui-btn">修改</button></div>
                </div>
            </div>
        </div>
    </div>

    <div class="layui-card">
        <div class="layui-card-header">轮播图</div>
        <div class="layui-card-body">
            <div class="banners">
                <table id="banner2" class="layui-table" lay-size="sm">
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
                        if ($banner->getType() == "Products") {
                            echo '<tr>';
                            echo '<td>'.$banner->getBannerUrl().'</td>';
                            echo '<td>'.$banner->getUrl().'</td>';
                            echo '<td>'.$banner->getName().'</td>';
                            echo '<td><button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe642;</i></button></td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                    </tbody>
                </table>
                <button class="layui-btn layui-btn-fluid" onclick="addBanner('banner2','Products')">添加轮播图</button>
            </div>
        </div>
    </div>

    <div class="layui-card">
        <div class="layui-card-header">分类管理</div>
        <div class="layui-card-body">
            <div class="banners">
                <table id="commodityClass" class="layui-table" lay-size="sm">
                    <colgroup>
                        <col width="150">
                        <col width="150">
                        <col width="150">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>分类名称</th>
                        <th>代号</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($pr->getAllMenu() as $prs) {
                            echo '<tr>';
                            echo '<td>'.$prs->getName().'</td>';
                            echo '<td>'.$prs->getCode().'</td>';
                            echo '<td><div class="layui-btn-group"><button id="edit" class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe642;</i></button></div></td>';
                            echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
                <button class="layui-btn layui-btn-fluid" onclick="addClass()">添加分类</button>
            </div>
        </div>
    </div>

    <div class="layui-card">
        <div class="layui-card-header">商品管理</div>
        <div class="layui-card-body">
            <div class="layui-form">
                <table id="commodity" class="layui-table" lay-size="sm">
                    <colgroup>
                        <col width="50">
                        <col width="180">
                        <col width="70">
                        <col width="100">
                        <col width="50">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>商品名称</th>
                        <th>商品URL</th>
                        <th>详情URL</th>
                        <th>商品分类</th>
                        <th>商品状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($pr->getAllProducts() as $prs) {
                            echo '<tr>';
                            echo '<td>'.$prs->getName().'</td>';
                            echo '<td>'.$prs->getImgUrl().'</td>';
                            echo '<td>'.$prs->getDetails().'</td>';
                            echo '<td>'.$prs->getCategory().'</td>';
                            if ($prs->getState() == 0)
                                echo '<td><input value="'.$prs->getName().'" lay-filter="pro" type="checkbox" name="state" lay-skin="switch" lay-text="上|下" checked></td>';
                            else
                                echo '<td><input value="'.$prs->getName().'" lay-filter="pro" type="checkbox" name="state" lay-skin="switch" lay-text="上|下"></td>';
                            echo '<td><button class="layui-btn layui-btn-sm" onclick="editTable(this)"><i class="layui-icon">&#xe642;</i></button></td>';
                            echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
                <button class="layui-btn layui-btn-fluid" onclick="addcommodity()">添加商品</button>
            </div>
        </div>
    </div>

</div>

<div class="admin" id="aboutUs">
    <div class="layui-card">
    <div class="layui-card-header">简介</div>
    <div class="layui-card-body">
        <div class="banners">
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">关于第一段</label>
                <div class="layui-input-block">
                    <textarea id="about2" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("about2");?></textarea>
                </div>
                <button onclick="wUpdate('about2','about2')" class="layui-btn layui-btn-fluid">修改</button>
            </div>
            <hr>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">关于第二段</label>
                <div class="layui-input-block">
                    <textarea id="about3" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("about3");?></textarea>
                </div>
                <button onclick="wUpdate('about3','about3')" class="layui-btn layui-btn-fluid">修改</button>
            </div>
            <hr>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">思想第一段</label>
                <div class="layui-input-block">
                    <textarea id="thought" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("thought");?></textarea>
                </div>
                <button onclick="wUpdate('thought','thought')" class="layui-btn layui-btn-fluid">修改</button>
            </div>
            <hr>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">思想第二段</label>
                <div class="layui-input-block">
                    <textarea id="thought2" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("thought2");?></textarea>
                </div>
                <button onclick="wUpdate('thought2','thought2')" class="layui-btn layui-btn-fluid">修改</button>
            </div>
        </div>
    </div>
    </div>

    <div class="layui-card">
        <div class="layui-card-header">售后指南</div>
        <div class="layui-card-body">
            <div class="banners">
                <div class="layui-form-item">
                    <label class="layui-form-label">图片：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="after" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneImg("售后")->getUrl();?>" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid"><button onclick="imgUpdate('售后','after')" class="layui-btn">修改</button></div>
                </div>
                <button class="layui-btn layui-btn-fluid" onclick="img('after')">点击选择图片</button>
            </div>
        </div>
    </div>

    <div class="layui-card">
        <div class="layui-card-header">公司简介</div>
        <div class="layui-card-body">
            <div class="banners">
                <div class="layui-form-item">
                    <label class="layui-form-label">图片：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="about" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneImg("简介")->getUrl(); ?>"" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid"><button onclick="imgUpdate('简介','about')" class="layui-btn">修改</button></div>
                </div>
                <button class="layui-btn layui-btn-fluid" onclick="img('about')">点击选择图片</button>
            </div>
        </div>
    </div>
</div>

<div class="admin" id="contactUs">
    <div class="layui-card">
        <div class="layui-card-header">展示图</div>
        <div class="layui-card-body">
            <div class="banners">
                <div class="layui-form-item">
                    <label class="layui-form-label">标题图片：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="contact" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneImg("联系")->getUrl();?>" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid"><button onclick="imgUpdate('联系','contact')" class="layui-btn">修改</button></div>
                </div>
                <button class="layui-btn layui-btn-fluid" onclick="img('contact')">点击选择图片</button>

                <hr>

                <div class="layui-form-item">
                    <label class="layui-form-label">标题文案：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="contactt" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneOther("contact");?>" autocomplete="off" class="layui-input">
                    </div>
                    <div onclick="wUpdate('contact','contactt')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>

            </div>
        </div>
    </div>

    <div class="layui-card">
        <div class="layui-card-header">主体</div>
        <div class="layui-card-body">
            <div class="banners">
                <div class="layui-form-item">
                    <label class="layui-form-label">主体文案：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="contact2" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneOther("contact2");?>" autocomplete="off" class="layui-input">
                    </div>
                    <div onclick="wUpdate('contact2','contact2')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>
                <hr>
                <div class="layui-form-item">
                    <label class="layui-form-label">地址：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <textarea id="contact3" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("contact3");?></textarea>
                    </div>
                    <div onclick="wUpdate('contact3','contact3')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>
                <hr>
                <div class="layui-form-item">
                    <label class="layui-form-label">电话：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <textarea id="phone" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("phone")?></textarea>
                    </div>
                    <div onclick="wUpdate('phone','phone')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>
                <hr>
                <div class="layui-form-item">
                    <label class="layui-form-label">QQ：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <textarea id="qq" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("qq")?></textarea>
                    </div>
                    <div onclick="wUpdate('qq','qq')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>
                <hr>
                <div class="layui-form-item">
                    <label class="layui-form-label">邮箱：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <textarea id="email" name="desc" class="layui-textarea"><?php echo $pr->getOneOther("email")?></textarea>
                    </div>
                    <div onclick="wUpdate('email','email')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--页面修改end-->
</div>

<!--页眉页脚-->
<div id="footerforheader">
    <div id="yu">
        <iframe width="900px" onload="this.height=this.contentWindow.document.body.scrollHeight" src="../index.php"></iframe>
    </div>

    <div class="admin">
        <div class="layui-form">
        <div class="layui-card">
            <div class="layui-card-header">导航菜单</div>
            <div class="layui-card-body">
                <table class="layui-table">
                    <thead>
                    <tr>
                        <th>名称</th>
                        <th>URL</th>
                        <th>状态</th>
                        <th>key</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($pr->getAllNav() as $prs){
                        echo '<tr>';
                        echo '<td>'.$prs->getName().'</td>';
                        echo '<td>'.$prs->getUrl().'</td>';
                        if ($prs->getState() == 0)
                            echo '<td><input value="'.$prs->getKey().'" type="checkbox" lay-filter="nav" name="state" lay-skin="switch" lay-text="ON|OFF" checked></td>';
                        else
                            echo '<td><input value="'.$prs->getKey().'" type="checkbox" lay-filter="nav" name="state" lay-skin="switch" lay-text="ON|OFF"></td>';
                        echo '<td>'.$prs->getKey().'</td>';
                        echo '<td><button onclick="editNav(this)" class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe642;</i></button></td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        <div class="layui-card">
            <div class="layui-card-header">页脚文案</div>
            <div class="layui-card-body">
                <textarea id="footerabout" placeholder="请输入内容" class="layui-textarea"><?php echo $pr->getOneOther("footerabout")?></textarea>
                <button onclick="wUpdate('footerabout','footerabout')" class="layui-btn layui-btn-fluid">修改</button>
                <hr>
                <div class="layui-form-item">
                    <label class="layui-form-label">页脚文字：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="footeripc" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneOther("footeripc")?>" autocomplete="off" class="layui-input">
                    </div>
                    <div onclick="wUpdate('footeripc','footeripc')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>
                <hr>
                <div class="layui-form-item">
                    <label class="layui-form-label">IPC备案：</label>
                    <div class="layui-input-inline" style="width: 526px">
                        <input id="ipc" type="text" name="title" lay-verify="required" value="<?php echo $pr->getOneOther("ipc")?>" autocomplete="off" class="layui-input">
                    </div>
                    <div onclick="wUpdate('ipc','ipc')" class="layui-form-mid"><button class="layui-btn">修改</button></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!--图片库-->
<div id="picture">
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">综合图片</li>
            <li>商品图片</li>
            <li>详情图片</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="img-table-row">
                    <?php
                    $dir = opendir("/var/www/html/image/banner");
                    while( ($filename = readdir($dir)) !== false ) {
                        $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
                        if(!is_dir($temp)&&$filename != "." && $filename != "..") {
                            $img_url = str_replace("/var/www/html", "", "/var/www/html/image/banner") . '/' . $filename;
                            echo '<div class="img-table-col" style="width: 300px;height: 200px;"><a href="javascript:;" class="bcc" data-clipboard-action="copy" data-clipboard-text="'.$img_url.'"><img alt="" src="'.$img_url.'"></a></div>';
                        }
                    }
                    ?>
                    <div class="img-table-col" style="height: 200px;"><a id="bannerx" href="javascript:;"><img alt="" src="http://ku.90sjimg.com/element_origin_min_pic/01/47/03/275743399a6c6da.jpg"></a></div>
                </div>
            </div>
            <div class="layui-tab-item">
                <div class="img-table-row">
                <?php
                $dir = opendir("/var/www/html/image/commodity");
                while( ($filename = readdir($dir)) !== false ) {
                    $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
                    if(!is_dir($temp)&&$filename != "." && $filename != "..") {
                        $img_url = str_replace("/var/www/html", "", "/var/www/html/image/commodity") . '/' . $filename;
                        echo '<div class="img-table-col" style="width: 150px;"><a href="javascript:;" class="bcc" data-clipboard-action="copy" data-clipboard-text="'.$img_url.'"><img alt="" src="'.$img_url.'"></a></div>';
                    }
                }
                ?>
                    <div class="img-table-col" style="width: 150px;"><a id="commodityx" href="javascript:;"><img alt="" src="http://ku.90sjimg.com/element_origin_min_pic/01/47/03/275743399a6c6da.jpg"></a></div>
                </div>
            </div>
            <div class="layui-tab-item">
                <div class="img-table-row">
                <?php
                $dir = opendir("/var/www/html/image/details");
                while( ($filename = readdir($dir)) !== false ) {
                    $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
                    if(!is_dir($temp)&&$filename != "." && $filename != "..") {
                        $img_url = str_replace("/var/www/html", "", "/var/www/html/image/details") . '/' . $filename;
                        echo '<div class="img-table-col"style="height: 600px"><a href="javascript:;" class="bcc" data-clipboard-action="copy" data-clipboard-text="'.$img_url.'"><img alt="" src="'.$img_url.'"></a></div>';
                    }
                }
                ?>
                    <div class="img-table-col" style="width: 150px;"><a id="detailsx" href="javascript:;"><img alt="" src="http://ku.90sjimg.com/element_origin_min_pic/01/47/03/275743399a6c6da.jpg"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--文案库-->
<div id="official">
    <table id="official" class="layui-table">
        <thead>
        <tr>
            <th>内容</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($pr->getAllOther() as $prs){
            echo '<tr>';
            echo '<td>'.$prs.'</td>';
            echo '<td><button class="layui-btn layui-btn-disabled"><i class="layui-icon">&#xe605;</i></button></td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<!--详情页-->
<div id="details" style="display: flex;">
    <div style="width: 50%">
    <table id="xiangqing" class="layui-table">
        <colgroup>
            <col>
            <col width="50">
        </colgroup>
        <thead>
        <tr>
            <th>已有详情页</th>
            <th>删除</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $dir = opendir("/var/www/html/productItems");
        while( ($filename = readdir($dir)) !== false ) {
            $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
            if(!is_dir($temp)&&$filename != "." && $filename != ".." && $filename != "img" && $filename!= "css") {
                $img_url = str_replace("/var/www/html", "", "/var/www/html/productItems") . '/' . $filename;
                echo "<tr>";
                echo "<td>".$img_url."</td>";
                echo "<td> <button class=\"layui-btn layui-btn-sm\"><i class=\"layui-icon\">&#xe640;</i></button></td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
    </div>
    <div style="width: 50%">
        <form class="layui-form" action="">
            <div class="layui-form-item">
                <label class="layui-form-label">名称</label>
                <div class="layui-input-block">
                    <input type="text" name="names" required  lay-verify="required" placeholder="请输详情页名" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">URL</label>
                <div class="layui-input-block">
                    <input type="text" onclick="img('xingsrc')" id="xingsrc" name="srcs" required  lay-verify="required" placeholder="请选择详情页图片" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="xiangqing">立即生成</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
        <div id="xingxxx" style="display: none">
            生成的详情页地址：<input id="xingxz" class="layui-input" type="text" id="xing2">
        </div>
    </div>
</div>

<script src='http://libs.baidu.com/jquery/2.1.1/jquery.min.js'></script>
<script src='../css/layui/layui.all.js'></script>
<script src="https://cdn.bootcss.com/clipboard.js/2.0.1/clipboard.min.js"></script>
<script >
    var form;
    var element;
    layui.use('layer', function(){
        var layer = layui.layer;
    });

    //导航监听
    layui.use('element', function(){
        element = layui.element;

        //监听导航点击
        element.on('nav(nav)', function(elem){
            //console.log(elem);
            // layer.msg(elem.text());
            if (elem.text() === "页面修改"){
                send("../index.php");
                $("#page").show();
                $("#footerforheader").hide();
                $("#picture").hide();
                $("#official").hide();
                $("#details").hide();
            }else if (elem.text() === "页眉页脚"){
                send("../index.php");
                $("#page").hide();
                $("#footerforheader").show();
                $("#picture").hide();
                $("#official").hide();
                $("#details").hide();
            }else if (elem.text() === "图片库"){
                $("#page").hide();
                $("#footerforheader").hide();
                $("#picture").show();
                $("#official").hide();
                $("#details").hide();
            }else if (elem.text() === "文案库"){
                $("#page").hide();
                $("#footerforheader").hide();
                $("#picture").hide();
                $("#official").show();
                $("#details").hide();
            }else if(elem.text() === "详情页"){
                $("#page").hide();
                $("#footerforheader").hide();
                $("#picture").hide();
                $("#official").hide();
                $("#details").show();
            }
        });
    });

    //选择菜单监听
    layui.use('form', function(){
        form = layui.form;

        form.on('select(page)',function (data) {
            // console.log(data.value);
            send(data.value);
            if (data.value === "index.php") {
                $("#index").show();
                $("#productShow").hide();
                $("#allProducts").hide();
                $("#aboutUs").hide();
                $("#contactUs").hide();
            }else if (data.value === "productShow.php"){
                $("#index").hide();
                $("#productShow").show();
                $("#allProducts").hide();
                $("#aboutUs").hide();
                $("#contactUs").hide();
            }else if (data.value === "allProducts.php"){
                $("#index").hide();
                $("#productShow").hide();
                $("#allProducts").show();
                $("#aboutUs").hide();
                $("#contactUs").hide();
            }else if (data.value === "aboutUs.php"){
                $("#index").hide();
                $("#productShow").hide();
                $("#allProducts").hide();
                $("#aboutUs").show();
                $("#contactUs").hide();
            }else if(data.value === "contactUs.php"){
                $("#index").hide();
                $("#productShow").hide();
                $("#allProducts").hide();
                $("#aboutUs").hide();
                $("#contactUs").show();
            }
        });
        form.on('switch(pro)', function(data){
            if (data.elem.checked) {
                switchs(data.value,0,'pro');
            }else {
                switchs(data.value,1,'pro');
            }
            send("../allProducts.php");
        });
        form.on('switch(nav)', function(data){
            if (data.elem.checked) {
                switchs(data.value,0,'nav');
            }else {
                switchs(data.value,1,'nav');
            }
            send("../index.php");
        });
        form.on('submit(banner1)',function (data) {
            layer.closeAll('page');
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "post",
                data: "bannerUrl="+data.field.bannerUrl+"&bannerAndUrl="+data.field.bannerAndUrl+"&bannerType="+data.field.bannerType+"&bannerName="+data.field.bannerName,
                dataType: "text",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
            return false;
        });
        form.on("submit(fenlei)",function (data) {
            layer.closeAll('page');
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "post",
                data: "nameMenu="+data.field.nameMenu+"&code="+data.field.codes,
                dataType: "text",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
            return false;
        });
        form.on("submit(pro)",function (date) {
           layer.closeAll('page');
           // console.log(date.field);
           var  datas = "name="+date.field.names+"&img="+date.field.imgs+"&state="+date.field.statesssss+"&details="+date.field.detailss+"&type="+date.field.typess;
           // if (isEmpty(date.field.states)){
           //     datas = "name="+date.field.names+"&img="+date.field.imgs+"&state=1&details="+date.field.detailss+"&type="+date.field.typess;
           // }else {
           //     datas = "name="+date.field.names+"&img="+date.field.imgs+"&state=0&details="+date.field.detailss+"&type="+date.field.typess;
           // }
           $.ajax({
               url: "../controller/ProductsController.php",
               type: "post",
               data: datas,
               dataType: "text",
               xhrFields: {withCredentials: true},
               success: function (date) {
                   send('../allProducts.php')
                   layer.msg(date);
               },
               error: function () {
                   layer.msg("错误");
               }
           });
           return false;
        });
        form.on("submit(nav)",function (date) {
            layer.closeAll('page');
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "post",
                data: "navname="+date.field.navname+"&navurl="+date.field.navurl+"&navstate="+date.field.navstate+"&navkey="+date.field.navkey,
                dataType: "text",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
            return false;
        });
        form.on("submit(xiangqing)",function (date) {
            $.ajax({
                url: "../controller/NewHtmlController.php",
                type: "post",
                data: "name="+date.field.names+"&src="+date.field.srcs,
                dataType: "json",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    // console.log(date);
                    if (date.code === 0){
                        $("#xingxxx").css("display","inline");
                        $("#xingxz").val(date.data);
                    }
                },
                error: function () {
                    console.log("错误");
                }
            });
            return false;
        });
        form.render();
    });

    //上传方法
    layui.use('upload', function() {
        var upload = layui.upload;

        //轮播图
        var uploadInst = upload.render({
            elem: '#bannerx',
            url: '../controller/UploadController.php', //上传接口
            data: {type : 'banner'},
            done: function (date) {
                //上传完毕回调
                layer.msg(date.msg);
                window.location.href='./index.php?nav=3';
            },
            error: function () {
                //错误回调
                layer.msg('上传发生错误');
            }
        })

        //商品图
        var uploadInst = upload.render({
            elem: '#commodityx',
            url: '../controller/UploadController.php', //上传接口
            data: {type : 'commodity'},
            done: function (date) {
                //上传完毕回调
                layer.msg(date.msg);
                window.location.href='./index.php?nav=3';
            },
            error: function () {
                //错误回调
                layer.msg('上传发生错误');
            }
        })

        //详情图
        var uploadInst = upload.render({
            elem: '#detailsx',
            url: '../controller/UploadController.php', //上传接口
            data: {type : 'details'},
            done: function (date) {
                //上传完毕回调
                layer.msg(date.msg);
                window.location.href='./index.php?nav=3';
            },
            error: function () {
                //错误回调
                layer.msg('上传发生错误');
            }
        })
    });

    //添加轮播图
    var numid = 0;
    function addBanner(id,type) {
        var table = document.getElementById(id);
        var row;  //创建表格的行
        row = table.insertRow();
        var cell0 = row.insertCell(0); //创建表格的列
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var e1 = document.createElement("input");
        e1.value = "选择图片";
        e1.classList.add("layui-input","addban");
        e1.id = "addban"+numid;
        e1.name = "bannerimg";
        var e2 = document.createElement("input");
        e2.type = "text";
        e2.name = "cell2name";
        e2.classList.add("layui-input");
        var e3 = document.createElement("input");
        e3.type = "text";
        e3.name = "dome";
        e3.classList.add("layui-input");
        var e4 = document.createElement("button");
        e4.innerHTML = '<i class="layui-icon">&#xe605;</i>';
        e4.classList.add("layui-btn","layui-btn-xs");
        e4.setAttribute("onclick","Three(this,'"+type+"')");
        cell0.appendChild(e1);
        cell1.appendChild(e2);
        cell2.appendChild(e3);
        cell3.appendChild(e4);
        $("#addban"+(numid)).on("click",function () {
            img('addban'+(numid-1));
        });
        numid++;
    }

    //添加分类
    function addClass() {
        var table = document.getElementById("commodityClass");
        var row = table.insertRow();
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var e1 = document.createElement("input");
        e1.type = "text";
        e1.name = "test";
        e1.classList.add("layui-input",);
        var e2 = document.createElement("input");
        e2.type = "text";
        e2.name = "test";
        e2.classList.add("layui-input",);
        var e3 = document.createElement("button");
        e3.innerHTML = '<i class="layui-icon">&#xe605;</i>';
        e3.classList.add("layui-btn","layui-btn-xs");
        e3.setAttribute("onclick","Three(this,'menu')");
        // e3.setAttribute("onclick","bannerok(this)");
        cell0.appendChild(e1);
        cell1.appendChild(e2);
        cell2.appendChild(e3);
        numid++;
    }

    //添加商品
    function addcommodity() {
        var table = document.getElementById("commodity");
        var row = table.insertRow();
        var cell0 = row.insertCell(0);
        var cell1 = row.insertCell(1);
        var cell2 = row.insertCell(2);
        var cell3 = row.insertCell(3);
        var cell4 = row.insertCell(4);
        var cell5 = row.insertCell(5);
        var e1 = document.createElement("input");
        e1.type = "text";
        e1.name = "test";
        e1.classList.add("layui-input",);
        var e2 = document.createElement("input");
        e2.type = "text";
        e2.name = "test";
        e2.id = "commodity"+numid;
        e2.classList.add("layui-input",);
        var e3 = document.createElement("input");
        e3.type = "text";
        e3.name = "test";
        e3.classList.add("layui-input",);
        var e4 = document.createElement("select");
        e4.innerHTML = '<?php foreach ($pr->getAllMenu() as $prs){ echo '<option value="'.$prs->getCode().'">'.$prs->getName().'</option>';} ?>';
        var e5 = document.createElement("input");
        e5.type = "checkbox";
        e5.name = "ssss";
        e5.setAttribute("lay-skin","switch");
        e5.setAttribute("lay-text","上|下");
        var e6 = document.createElement("button");
        e6.innerHTML = '<i class="layui-icon">&#xe605;</i>';
        e6.classList.add("layui-btn","layui-btn-xs");
        e6.setAttribute("onclick","Three(this,'pro')");
        cell0.appendChild(e1);
        cell1.appendChild(e2);
        cell2.appendChild(e3);
        cell3.appendChild(e4);
        cell4.appendChild(e5);
        cell5.appendChild(e6);
        form.render();
        $("#commodity"+numid).on("click",function () {
            img("commodity"+(numid-1));
        });
        numid++;
    }

    //更新iframe
    function send(zch){
        $("#yu iframe").attr("src", '../'+zch);
    }

    //点击选择图片功能
    function img(ids){
        var id = ""+ids;
        layer.tab({
            area: ['600px', '300px'],
            maxmin: true,
            tab: [{
                title: '轮播图片',
                content: '<?php
                    echo '<div class="img-table-row">';
                    $dir = opendir("/var/www/html/image/banner");
                    while( ($filename = readdir($dir)) !== false ) {
                        $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
                        if(!is_dir($temp)&&$filename != "." && $filename != "..") {
                            $img_url = str_replace("/var/www/html", "", "/var/www/html/image/banner") . '/' . $filename;
                            echo "<div class=\"img-table-col\" style=\"width: 150px;height: 100px;\"><a href=\"javascript:\" onclick=\"inputUpdate("?>\''+ids+'\'<?php echo ",\'http://bbiitt.cn".$img_url."\',"?><?php echo ")\"><img alt=\"\" src=\"".$img_url."\"></a></div>";
                    }
                    }
                    echo '</div>';
                    ?>'
            }, {
                title: '商品图片',
                content: '<?php
                    echo '<div class="img-table-row">';
                    $dir = opendir("/var/www/html/image/commodity");
                    while( ($filename = readdir($dir)) !== false ) {
                        $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
                        if(!is_dir($temp)&&$filename != "." && $filename != "..") {
                            $img_url = str_replace("/var/www/html", "", "/var/www/html/image/commodity") . '/' . $filename;
                            echo "<div class=\"img-table-col\" style=\"width: 150px;\"><a href=\"javascript:\" onclick=\"inputUpdate("?>\''+id+'\'<?php echo ",\'http://bbiitt.cn".$img_url."\')\"><img alt=\"\" src=\"".$img_url."\"></a></div>";
                        }
                    }
                    echo '</div>';
                    ?>'
            }, {
                title: '详情图片',
                content: '<?php
                    echo '<div class="img-table-row">';
                    $dir = opendir("/var/www/html/image/details");
                    while( ($filename = readdir($dir)) !== false ) {
                        $temp = $_SERVER['QUERY_STRING'].DIRECTORY_SEPARATOR.$filename;
                        if(!is_dir($temp)&&$filename != "." && $filename != "..") {
                            $img_url = str_replace("/var/www/html", "", "/var/www/html/image/details") . '/' . $filename;
                            echo "<div class=\"img-table-col\"style=\"height: 600px\"><a href=\"javascript:\" onclick=\"inputUpdate("?>\''+id+'\'<?php echo ",\'http://bbiitt.cn".$img_url."\')\" ><img alt = \"\" src = \"".$img_url."\"></a ></div>";
                        }
                    }
                    echo '</div>';
                    ?>'
            }]
        });
    }

    //回调方法
    function inputUpdate(aaaa,src) {
             console.log($("#"+aaaa).val(src));
             layer.tips('选择成功', "#"+aaaa, {time: 1000});
             layer.closeAll('page');
    }

    //商品表格修改操作监听
    function editTable(ds){
        var row = $(ds).parent().parent().find("td");
        var name = row.eq(0).text();
        var commodityUrl = row.eq(1).text();
        var commodityOutUrl = row.eq(2).text();
        var type = row.eq(3).text();
        layer.open({
            type: 1,
            skin: 'layui-layer-rim',
            area: ['400px', '450px'],
            title: '编辑',
            content: '<div style="text-align: center"><form style="width: 95%" class="layui-form" action=""><input id="type" type="text" name="typess" style="display: none"><div class="layui-form-item"><label class="layui-form-label">商品名称</label><div class="layui-input-block"><input id="name" type="text" name="names" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">商品URL</label><div class="layui-input-block"><input id="commodityUrl" type="text" name="imgs" required  lay-verify="required" placeholder="请选择图片" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">详情URL</label><div class="layui-input-block"><input id="commodityOutUrl" type="text" name="detailss" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item" style="width: 400px"><select name="statesssss" lay-verify=""><option value="0">上架</option><option value="1">下架</option><option value="2">新品</option><option value="3">热销</option></select> </div><div class="layui-form-item" style="width: 400px"><button class="layui-btn" lay-submit lay-filter="pro"><i class="layui-icon">&#xe605;</i> 修改</button></div></form><button id="rem" value="" onclick="rem(this.name,this.value)" class="layui-btn"><i class="layui-icon">&#x1006;</i> 删除</button></div>',
            success: function(layero, index){
                $("#name").val(name);
                $("#commodityUrl").val(commodityUrl);
                $("#commodityOutUrl").val(commodityOutUrl);
                $("#type").val(type);
                $("#rem").val(name);
                $("#rem").attr("name","pro");
                form.render();
            }
        })
    }

    //导航表格监听
    function editNav(ds){
        var row = $(ds).parent().parent().find("td");
        var name = row.eq(0).text();
        var url = row.eq(1).text();
        var key = row.eq(3).text();
        layer.open({
            type: 1,
            skin: "layui-layer-rim",
            area: ['400px','300px'],
            title: '编辑',
            content: '<div style="text-align: center"><form style="width: 95%" class="layui-form" action=""><input id="navkey" type="text" name="navkey" style="display: none"><input type="text" name="navstate" value="0" style="display: none"><div class="layui-form-item"><label class="layui-form-label">名称</label><div class="layui-input-block"><input id="name" type="text" name="navname" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">URL</label><div class="layui-input-block"><input id="url" type="text" name="navurl" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item" style="width: 400px"><button class="layui-btn" lay-submit lay-filter="nav"><i class="layui-icon">&#xe605;</i> 修改</button></div></form><button id="rem" value="" onclick="rem(this.name,this.value)" class="layui-btn"><i class="layui-icon">&#x1006;</i> 删除</button></div>',
            success :function (layero,index) {
                $("#name").val(name);
                $("#url").val(url);
                $("#navkey").val(key);
                $("#rem").val(key);
                $("#rem").attr("name","nav");
            }
        })
    }

    //弹出窗删除按钮
    function rem(type,key){
        layer.confirm('确定要删除吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            remove(type,key);
            layer.closeAll('page');
        }, function(){
            //取消
        });
    }

    //所有删除按钮
    function remove(type,key){
        $.ajax({
            url: "../controller/RemoveController.php",
            type: "POST",
            data: "type="+type+"&key="+key,
            dataType: "text",
            xhrFields: {withCredentials: true},
            success: function (date) {
                console.log(type);
            },
            error: function () {
                layer.msg("错误");
            }
        })
    }

    //所有页面添加确定按钮
    function Three(sc,type){
        var row = $(sc).parent().parent().find("td");
        if (type === "pro"){
            var name = row.eq(0).find("INPUT").val();
            var img = row.eq(1).find("INPUT").val();
            var details = row.eq(2).find("INPUT").val();
            var type = row.eq(3).find("SELECT").val();
            var state = 0;
            // console.log(name);
            // console.log(img);
            // console.log(state);
            // console.log(details);
            // console.log(type);
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "post",
                data: "name="+name+"&img="+img+"&state="+state+"&details="+details+"&type="+type,
                dataType: "text",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
        }else if (type === "menu"){
            var code = row.eq(0).find("INPUT").val();
            var nameMenu = row.eq(1).find('INPUT').val();
            // console.log(code);
            // console.log(nameMenu);
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "post",
                data: "code="+code+"&nameMeun="+nameMenu,
                dataType: "text",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
        }else {
            var bannerUrl = row.eq(0).find("INPUT").val();
            var bannerAndUrl = row.eq(1).find("INPUT").val();
            var bannerType = type;
            var bannerName = row.eq(2).find("INPUT").val();
            // console.log(bannerUrl);
            // console.log(bannerAndUrl);
            // console.log(bannerType);
            // console.log(bannerName);
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "post",
                data: "bannerUrl="+bannerUrl+"&bannerAndUrl="+bannerAndUrl+"&bannerType="+bannerType+"&bannerName="+bannerName,
                dataType: "text",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
        }
    }

    //所有开关按钮
    function switchs(key,state,type){
        var data;
        if (type === "pro")
            data = "proname="+key+"&prostate="+state;
        else if (type === "nav")
            data = "navkey="+key+"&navstate="+state;
        $.ajax({
            url: "../controller/UpdateController.php",
            type: "POST",
            data: data,
            dataType: "text",
            xhrFields: {withCredentials: true},
            success: function (date) {
                layer.msg(date);
            },
            error: function () {
                layer.msg("错误");
            }
        })
    }

    //图片修改按钮
    function imgUpdate(name,url){
        layer.prompt({title: "需要外链，请输入，不需要请取消",btn2:function () {
                $.ajax({
                    url: "../controller/ProductsController.php",
                    type: "POST",
                    data: "imgname="+name+"&imgurl="+$("#"+url).val()+"&imgouturl=",
                    dataType: "text",
                    xhrFields: {withCredentials: true},
                    success: function (date) {
                        layer.msg(date);
                    },
                    error: function () {
                        layer.msg("错误");
                    }
                })
            }},function (date,index) {
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "POST",
                data: "imgname="+name+"&imgurl="+$("#"+url).val()+"&imgouturl="+date,
                dataType: "text",
                xhrFields: {withCredentials: true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
            layer.close(index);
        })
    }

    //文案修改按钮
    function wUpdate(otherkey,othervalue){
        $.ajax({
            url: "../controller/ProductsController.php",
            type: "POST",
            data: "otherkey="+otherkey+"&othervalue="+$("#"+othervalue).val(),
            dataType: "text",
            xhrFields: {withCredentials: true},
            success: function (date) {
                layer.msg(date);
            },
            error: function () {
                layer.msg("错误");
            }
        })
    }


    //页面加载时执行方法
    $(function () {
        $("#footerforheader").hide();
        $("#picture").hide();
        $("#official").hide();
        $("#details").hide();
        //
        $("#productShow").hide();
        $("#allProducts").hide();
        $("#aboutUs").hide();
        $("#contactUs").hide();
        //
        $(".admin").css("width",$(window).width()-910);

        //首页banner表格监听
        $("#banner1 tr:gt(0)").click(function () {
            var imgUrl = $(this).find("td").eq(0).html();
            var imgOutUrl = $(this).find("td").eq(1).html();
            var imgName = $(this).find("td").eq(2).html();
            layer.open({
                type: 1,
                skin: 'layui-layer-rim',
                area: ['400px', '300px'],
                title: '编辑',
                content: '<div style="text-align: center"><form style="width: 95%" class="layui-form" action="../controller/ProductsController.php" method="post"><div class="layui-form-item"><input name="bannerType" type="text" value="index2" style="display: none"><label class="layui-form-label">图片URL</label><div class="layui-input-block"><input id="imgUrl" type="text" name="bannerUrl" required  lay-verify="required" placeholder="请选择图片" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">外链URL</label><div class="layui-input-block"><input id="imgOutUrl" type="text" name="bannerAndUrl" placeholder="请输入链接地址" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">图片名称</label><div class="layui-input-block"><input id="imgName" type="text" name="bannerName" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item" style="width: 400px"><button class="layui-btn" lay-submit lay-filter="banner1"><i class="layui-icon">&#xe605;</i> 修改</button></div></form><button class="layui-btn" id="rem" value="" onclick="rem(this.name,this.value)"><i class="layui-icon">&#x1006;</i>删除</button></div>',
                success: function(layero, index){
                    $("#imgUrl").val(imgUrl);
                    $("#imgOutUrl").val(imgOutUrl);
                    $("#imgName").val(imgName);
                    $("#rem").val(imgName);
                    $("#rem").attr("name","banner");
                    form.render();
                }
            })
        });

        //全部商品banner表格监听
        $("#banner2 tr:gt(0)").click(function () {
            var imgUrl = $(this).find("td").eq(0).html();
            var imgOutUrl = $(this).find("td").eq(1).html();
            var imgName = $(this).find("td").eq(2).html();
            layer.open({
                type: 1,
                skin: 'layui-layer-rim',
                area: ['400px', '300px'],
                title: '编辑',
                content: '<div style="text-align: center"><form style="width: 95%" class="layui-form" action=""><input type="text" name="bannerType" value="Products" style="display: none"><div class="layui-form-item"><label class="layui-form-label">图片URL</label><div class="layui-input-block"><input id="imgUrl" type="text" name="bannerUrl" required  lay-verify="required" placeholder="请选择图片" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">外链URL</label><div class="layui-input-block"><input id="imgOutUrl" type="text" name="bannerAndUrl" placeholder="请输入链接地址" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">图片名称</label><div class="layui-input-block"><input id="imgName" type="text" name="bannerName" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item" style="width: 400px"><button class="layui-btn" lay-submit lay-filter="banner1"><i class="layui-icon">&#xe605;</i> 修改</button></div></form><button id="rem" value="" onclick="rem(this.name,this.value)" class="layui-btn"><i class="layui-icon">&#x1006;</i> 删除</button></div>',
                success: function(layero, index){
                    $("#imgUrl").val(imgUrl);
                    $("#imgOutUrl").val(imgOutUrl);
                    $("#imgName").val(imgName);
                    $("#rem").val(imgName);
                    $("#rem").attr("name","banner");
                    form.render();
                }
            })
        });

        //分类表格监听
        $("#commodityClass tr:gt(0)").click(function () {
            var name = $(this).find("td").eq(0).html();
            var key = $(this).find("td").eq(1).html();
            layer.open({
                type: 1,
                skin: 'layui-layer-rim',
                area: ['400px', '300px'],
                title: '编辑',
                content: '<div style="text-align: center"><form style="width: 95%" class="layui-form" action=""><div class="layui-form-item"><label class="layui-form-label">分类名称</label><div class="layui-input-block"><input id="name" type="text" name="nameMenu" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item"><label class="layui-form-label">代号</label><div class="layui-input-block"><input id="key" type="text" name="codes" required  lay-verify="required" autocomplete="off" class="layui-input" value=""></div></div><div class="layui-form-item" style="width: 400px"><button class="layui-btn" lay-submit lay-filter="fenlei"><i class="layui-icon">&#xe605;</i> 修改</button></div></form><button id="rem" value="" onclick="rem(this.name,this.value)" class="layui-btn"><i class="layui-icon">&#x1006;</i> 删除</button></div>',
                success: function(layero, index){
                    $("#name").val(name);
                    $("#key").val(key);
                    $("#rem").val(key);
                    $("#rem").attr("name","menu");
                    form.render();
                }
            })
        });

        //文案库
        $('#official td').click(function(){
            if (($(this).index()+1) === 1) {
                if (!$(this).is('.input')) {
                    $(this).addClass('input').html('<input class="layui-input" type="text" value="' + $(this).text() + '" />').find('input').focus().blur(function () {
                        $(this).parent().removeClass('input').html($(this).val() || 0);
                    });
                }
            }
        });

        //详情页
        $('#xiangqing td').click(function () {
           var namess = $("#xiangqing tr:eq("+($(this).parent().index() + 1)+") td:eq(0)").html();
            if (($(this).index()+1) === 2) {
                layer.confirm('确定要删除吗？', {
                    btn: ['确定','取消'] //按钮
                }, function(){
                    deletes(namess);
                    layer.msg('已删除', {icon: 1});
                    window.location.href = './index.php?nav=5';
                }, function(){
                    //取消
                });
            }
        });

        //导航设置
        console.log(getParam('nav'));
        if (getParam('nav') === '1') {
            $("#layui-nav-1").addClass('layui-this');
            $("#layui-nav-2").removeClass('layui-this');
            $("#layui-nav-3").removeClass('layui-this');
            $("#layui-nav-4").removeClass('layui-this');
            $("#layui-nav-5").removeClass('layui-this');
            $("#layui-nav-6").removeClass('layui-this');

            //
            $("#footerforheader").hide();
            $("#picture").hide();
            $("#official").hide();
            $("#details").hide();
        }else if (getParam('nav') === '2') {
            $("#layui-nav-1").removeClass('layui-this');
            $("#layui-nav-2").addClass('layui-this');
            $("#layui-nav-3").removeClass('layui-this');
            $("#layui-nav-4").removeClass('layui-this');
            $("#layui-nav-5").removeClass('layui-this');
            $("#layui-nav-6").removeClass('layui-this');

            //
            $("#page").hide();
            $("#footerforheader").show();
            $("#picture").hide();
            $("#official").hide();
            $("#details").hide();
        }else if (getParam('nav') === '3') {
            $("#layui-nav-1").removeClass('layui-this');
            $("#layui-nav-2").removeClass('layui-this');
            $("#layui-nav-3").addClass('layui-this');
            $("#layui-nav-4").removeClass('layui-this');
            $("#layui-nav-5").removeClass('layui-this');
            $("#layui-nav-6").removeClass('layui-this');

            //
            $("#page").hide();
            $("#footerforheader").hide();
            $("#picture").show();
            $("#official").hide();
            $("#details").hide();
        }else if (getParam('nav') === '4') {
            $("#layui-nav-1").removeClass('layui-this');
            $("#layui-nav-2").removeClass('layui-this');
            $("#layui-nav-3").removeClass('layui-this');
            $("#layui-nav-4").addClass('layui-this');
            $("#layui-nav-5").removeClass('layui-this');
            $("#layui-nav-6").removeClass('layui-this');

            //
            $("#page").hide();
            $("#footerforheader").hide();
            $("#picture").hide();
            $("#official").show();
            $("#details").hide();
        }else if (getParam('nav') === '5') {
            $("#layui-nav-1").removeClass('layui-this');
            $("#layui-nav-2").removeClass('layui-this');
            $("#layui-nav-3").removeClass('layui-this');
            $("#layui-nav-4").removeClass('layui-this');
            $("#layui-nav-5").addClass('layui-this');
            $("#layui-nav-6").removeClass('layui-this');

            //
            $("#page").hide();
            $("#footerforheader").hide();
            $("#picture").hide();
            $("#official").hide();
            $("#details").show();
        }else if (getParam('nav') === '6') {
            $("#layui-nav-1").removeClass('layui-this');
            $("#layui-nav-2").removeClass('layui-this');
            $("#layui-nav-3").removeClass('layui-this');
            $("#layui-nav-4").removeClass('layui-this');
            $("#layui-nav-5").removeClass('layui-this');
            $("#layui-nav-6").addClass('layui-this');

            //
            $("#page").hide();
            $("#footerforheader").hide();
            $("#picture").hide();
            $("#official").hide();
            $("#details").hide();
        }
        element.init();
        });

    //退出
    function outLogin() {
        layer.confirm('确定要退出？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                url: "../controller/CancelController.php",
                type: "get",
                dataType: "json",
                xhrFields: {withCredentials:true},
                success: function (date) {
                    layer.msg(date.msg);
                    window.location.href = "./login/login.html";
                },
                error: function () {
                    layer.msg("错误");
                }
            })
            layer.msg('退出成功', {icon: 1});
        }, function(){
        });
    }

    //修改密码
    function passupdate() {
        layer.prompt({title: '请输入新密码，并确认', formType: 1}, function(pass, index){
            layer.close(index);
            $.ajax({
                url: "../controller/ProductsController.php",
                type: "post",
                data: "userName=admin&userPass="+pass,
                dataType: "text",
                xhrFields: {withCredentials:true},
                success: function (date) {
                    layer.msg(date);
                },
                error: function () {
                    layer.msg("错误");
                }
            });
        });
    }


    //删除文件
    function deletes(name) {
        $.ajax({
            url: "../controller/DeleteController.php",
            type: "post",
            data: "name="+name,
            dataType: "json",
            xhrFields: {withCredentials: true},
            success: function (date) {
                layer.msg(date.msg);
                console.log(date);
            },
            error: function () {
                layer.msg("错误");
            }
        })
    }

    function getParam(paramName) {
        paramValue = "", isFound = !1;
        if (this.location.search.indexOf("?") == 0 && this.location.search.indexOf("=") > 1) {
            arrSource = unescape(this.location.search).substring(1, this.location.search.length).split("&"), i = 0;
            while (i < arrSource.length && !isFound) arrSource[i].indexOf("=") > 0 && arrSource[i].split("=")[0].toLowerCase() == paramName.toLowerCase() && (paramValue = arrSource[i].split("=")[1], isFound = !0), i++
        }
        return paramValue == "" && (paramValue = null), paramValue
    }

    function isEmpty(obj)
    {
        for (var name in obj)
        {
            return false;
        }
        return true;
    };

    var clipboard = new ClipboardJS('.bcc');
    clipboard.on('success', function(e) {
        layer.confirm(e.text, {
            btn: ['复制地址','删除图片'] //按钮
        }, function(){
            layer.msg('复制成功', {icon: 1});
        }, function(){
            deletes(e.text);
            window.location.href = './index.php?nav=3';
        });
        // console.log(e.text);
        // layer.msg("地址已经复制到剪切板",{icon: 1});
    });

    clipboard.on('error', function(e) {
        layer.confirm(e.text, {
            btn: ['复制地址','删除图片'] //按钮
        }, function(){
            layer.msg('复制失败，请手动复制', {icon: 1});
        }, function(){
            deletes(e.text);
        });
    });
</script>
</body>
</html>
