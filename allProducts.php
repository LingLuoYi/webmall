<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/7
 * Time: 4:05 PM
 */
header("Content-type: text/html; charset=utf-8");
include("config.php");
$dir = dirname(__FILE__) . "/img/products/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>矿机商城-产品</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/iconfont/iconfont.css">
    <link rel="stylesheet" href="lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="css/allProducts.css">
    <script src="./lib/jQuery/jquery-3.3.1.min.js"></script>
    <script src="./lib/swiper/swiper.min.js"></script>
    <script src="js/common.js"></script>
    <style>
        .w-nav{
    width: 13rem;
            height: 60px;
            margin: 0 auto;
        }
        .w-nav>ul{
    width: 500px;
            height: 100%;
            display: flex;
            flex: 1;
        }
        .w-nav>ul>li{
    flex: 1;
    line-height: 60px;
            text-align: center;
            margin-left: 5px;
            font-size: 12px;
        }
        .w-nav>ul>li:hover{
    font-size: 14px;
            font-weight: bold;
            color: #5a5a5a;
            border-bottom: 3px solid #1e252e;
        }
        .active{
    font-size: 14px;
            font-weight: bold;
            color: #5a5a5a;
            border-bottom: 3px solid #1e252e;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <!-- -->
        <header>
            <div class="header w">
                <a href="./index.html" id="logo">
                    <h1>芯动科技</h1>
                </a>
                <nav class="header-nav">
                    <?php
                    foreach ($navigation as $nav){
                        echo $nav;
                    }
                    ?>
                </nav>
            </div>
            <div class="tip">
                <p class="w">
                    <span>
                        <i></i>注意</span>矿机购买付款请认准官方网站，谨防网络仿冒诈骗，以免财产受损。</p>
            </div>
        </header>
        <!--  -->

        <!--  -->
        <main class="main">
            <section class="top w">
                <div class="swiper-container swiper" style="width: 100%">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="./productItems/D9.html">
                                <img src="./img/banner4.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="./productItems/D9.html">
                                <img src="./img/slide.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>




            <div class="w-nav">
                <ul>
                    <li class="active choose open1">全部矿机</li>
                    <?php
                    foreach ($classification as $classify){
                        echo '<li class="choose open2">'.$classify.'</li>';
                    }
                    ?>
                </ul>
            </div>
            <!--全部-->
                <?php
                $name = "";
                $fileName = scandir($dir);
                echo '<section class="bottom w openning1">';
                foreach ($fileName as $files){
                if($files != ".." && $files != ".") {
                    $name = "/img/products/" . $files . "/";
                    $names = scandir($dir . $files);
                    foreach ($names as $name1) {
                        if ($name1 != ".." && $name1 != ".") {
                            echo '<div class="products-items">';
                            echo '<a href="./productItems/'.substr($name1,0,strpos($name1, '.')).'.html">';
                            echo '<img src="'.$name.$name1.'" alt="'.$name1.'">';
                            echo '</a>';
                            echo '</div>';
                        }
                    }
                }
                }
                echo '</section>';
//              全部结束
//              芯动
                $xs = scandir($dir."xindong/");
                echo '<section class="bottom w openning2">';
                foreach ($xs as $x1){
                    if ($x1 != ".." && $x1 != "."){
                        echo '<div class="products-items">';
                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
                        echo '<img src="/img/products/xindong/'.$x1.'" alt="'.$x1.'">';
                        echo '</a>';
                        echo '</div>';
                    }
                }
                echo '</section>';
                //蚂蚁
                $xs = scandir($dir."mayi/");
                echo '<section class="bottom w openning3">';
                foreach ($xs as $x1){
                    if ($x1 != ".." && $x1 != "."){
                        echo '<div class="products-items">';
                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
                        echo '<img src="/img/products/mayi/'.$x1.'" alt="'.$x1.'">';
                        echo '</a>';
                        echo '</div>';
                    }
                }
                echo '</section>';
                //神马
                $xs = scandir($dir."shenma/");
                echo '<section class="bottom w openning4">';
                foreach ($xs as $x1){
                    if ($x1 != ".." && $x1 != "."){
                        echo '<div class="products-items">';
                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
                        echo '<img src="/img/products/shenma/'.$x1.'" alt="'.$x1.'">';
                        echo '</a>';
                        echo '</div>';
                    }
                }
                echo '</section>';
                //阿瓦隆
                $xs = scandir($dir."awalong/");
                echo '<section class="bottom w openning5">';
                foreach ($xs as $x1){
                    if ($x1 != ".." && $x1 != "."){
                        echo '<div class="products-items">';
                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
                        echo '<img src="/img/products/awalong/'.$x1.'" alt="'.$x1.'">';
                        echo '</a>';
                        echo '</div>';
                    }
                }
                echo '</section>';
                ?>
        </main>
        <!--  -->

        <!--  -->
        <footer class="footer">
            <section class="aboutUs">
                <div class="inner w">
                    <div class="about-us">
                        <p class="title">关于我们</p>
                        <p class="content">深圳市蚂蚁区块链科技有限公司是一家致力于区块链领域的科技公司。公司团队从2017年开始区块链的设计与研发，经过持续的研发与改进，逐步形成了以基于区块链应用为基础，致力于运用云计算、大数据、区块链等先进技术，打造基于云端的、集投融资、支付、清结算和市场营销等功能为一体的金融云平台。</p>
                    </div>
                    <nav class="footer-nav">
                        <span class="help-center">
                            <p>
                                <a href="./contactUs.html">帮助中心</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="./aboutUs.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="./aboutUs.html">使用条款</a>
                                </li>
                                <li>
                                    <a href="./aboutUs.html">180天内保修</a>
                                </li>
                            </ul>
                        </span>
                        <span class="tech-supports">
                            <p>
                                <a href="./contact us.jpg">技术支持</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="./contactUs.html">售后服务</a>
                                </li>
                            </ul>
                        </span>
                        <span class="products-center">
                            <p>
                                <a href="./allProducts.html">产品中心</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="./allProducts.html">矿机</a>
                                </li>
                                <li>
                                    <a href="./allProducts.html">更多商品</a>
                                </li>
                            </ul>
                        </span>
                    </nav>
                </div>
            </section>
            <p class="copyright">2017-2018;深圳市蚂蚁区块链科技有限公司---<a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备18106718号-2</a></p>
        </footer>
        <!--  -->

    </div>
    <script>
$(function () {
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
                    clickable: true
                },
        autoplay: true,
                speed: 2000,
                loop: true
            });
            $('.category-box li').each(function (index, elem) {
                $(elem).on({
                    'mouseenter': function () {
                    $('.category').hide();
                    $('.category' + (index + 1)).show();
                }
                });
            });
            $('.category-box').on('mouseleave', function () {
                $('.category').hide();
            });
            $('.category').on('mouseleave', function () {
                $(this).hide();
            });
            $('.w-nav>ul>li').on('click',function () {
                $(this).addClass('active').siblings().removeClass('active')
            });
            $('.openning2').hide();
            $('.openning3').hide();
            $('.openning4').hide();
            $('.openning5').hide();
            $('.open2').click(function () {
                $('.openning2').show();
                $('.openning1').hide();
                $('.openning3').hide();
                $('.openning4').hide();
                $('.openning5').hide();
            })
            $('.open1').click(function () {
                $('.openning2').hide();
                $('.openning1').show();
                $('.openning3').hide();
                $('.openning4').hide();
                $('.openning5').hide();
            })
            $('.open3').click(function () {
                $('.openning2').hide();
                $('.openning1').hide();
                $('.openning3').show();
                $('.openning4').hide();
                $('.openning5').hide();
            })
            $('.open4').click(function () {
                $('.openning2').hide();
                $('.openning1').hide();
                $('.openning3').hide();
                $('.openning4').show();
                $('.openning5').hide();
            })
            $('.open5').click(function () {
                $('.openning2').hide();
                $('.openning1').hide();
                $('.openning3').hide();
                $('.openning4').hide();
                $('.openning5').show();
            })
        });
    </script>
    <script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10184269/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
</body>
</html>


