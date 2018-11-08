<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/7
 * Time: 4:05 PM
 */
header("Content-type: text/html; charset=utf-8");
require_once("config/config.php");
require_once './server/ProductsServer.php';
$allProducts = new AllProducts();
$pr = new ProductsServer();
$dir = dirname(__FILE__) . "/img/products/";
$title = "矿机商城-产品";
include "split/header.php";
?>

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
                    for ($x = 0; $x<=count($allProducts->classification); $x++){
                        echo '<li class="choose open'.($x+2).'">'.$allProducts->classification[$x].'</li>';
                    }
                    ?>
                </ul>
            </div>
            <!--全部-->
                <?php

                foreach ($pr->getAllProducts() as $prs){
                    if ($prs->getState() == 0) {
                            echo '<section class="bottom w openning1">';
                            echo '<div class="products-items">';
                            echo '<a href="' . $prs->getDetails() . '">';
                            echo '<img src="' . $prs->getImgUrl() . '" alt="' . $prs->getName() . '">';
                            echo '</a>';
                            echo '</div>';
                            echo '</section>';
                        if ($prs->getCategory() == "芯动矿机"){
                            echo '<section class="bottom w openning2">';
                            echo '<div class="products-items">';
                            echo '<a href="' . $prs->getDetails() . '">';
                            echo '<img src="' . $prs->getImgUrl() . '" alt="' . $prs->getName() . '">';
                            echo '</a>';
                            echo '</div>';
                            echo '</section>';

                        }elseif ($prs->getCategory() == "蚂蚁矿机"){
                            echo '<section class="bottom w openning3">';
                            echo '<div class="products-items">';
                            echo '<a href="' . $prs->getDetails() . '">';
                            echo '<img src="' . $prs->getImgUrl() . '" alt="' . $prs->getName() . '">';
                            echo '</a>';
                            echo '</div>';
                            echo '</section>';

                        }elseif ($prs->getCategory() == "神马矿机"){
                            echo '<section class="bottom w openning4">';
                            echo '<div class="products-items">';
                            echo '<a href="' . $prs->getDetails() . '">';
                            echo '<img src="' . $prs->getImgUrl() . '" alt="' . $prs->getName() . '">';
                            echo '</a>';
                            echo '</div>';
                            echo '</section>';

                        }elseif ($prs->getCategory() == "阿瓦隆矿机"){
                            echo '<section class="bottom w openning5">';
                            echo '<div class="products-items">';
                            echo '<a href="' . $prs->getDetails() . '">';
                            echo '<img src="' . $prs->getImgUrl() . '" alt="' . $prs->getName() . '">';
                            echo '</a>';
                            echo '</div>';
                            echo '</section>';

                        }
                    }
                }

//                $name = "";
//                $fileName = scandir($dir);
//                echo '<section class="bottom w openning1">';
//                foreach ($fileName as $files){
//                if($files != ".." && $files != ".") {
//                    $name = "/img/products/" . $files . "/";
//                    $names = scandir($dir . $files);
//                    foreach ($names as $name1) {
//                        if ($name1 != ".." && $name1 != ".") {
//                            echo '<div class="products-items">';
//                            echo '<a href="./productItems/'.substr($name1,0,strpos($name1, '.')).'.html">';
//                            echo '<img src="'.$name.$name1.'" alt="'.$name1.'">';
//                            echo '</a>';
//                            echo '</div>';
//                        }
//                    }
//                }
//                }
//                echo '</section>';
//              全部结束
//              芯动
//                $xs = scandir($dir."xindong/");
//                echo '<section class="bottom w openning2">';
//                foreach ($xs as $x1){
//                    if ($x1 != ".." && $x1 != "."){
//                        echo '<div class="products-items">';
//                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
//                        echo '<img src="/img/products/xindong/'.$x1.'" alt="'.$x1.'">';
//                        echo '</a>';
//                        echo '</div>';
//                    }
//                }
//                echo '</section>';
//                //蚂蚁
//                $xs = scandir($dir."mayi/");
//                echo '<section class="bottom w openning3">';
//                foreach ($xs as $x1){
//                    if ($x1 != ".." && $x1 != "."){
//                        echo '<div class="products-items">';
//                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
//                        echo '<img src="/img/products/mayi/'.$x1.'" alt="'.$x1.'">';
//                        echo '</a>';
//                        echo '</div>';
//                    }
//                }
//                echo '</section>';
//                //神马
//                $xs = scandir($dir."shenma/");
//                echo '<section class="bottom w openning4">';
//                foreach ($xs as $x1){
//                    if ($x1 != ".." && $x1 != "."){
//                        echo '<div class="products-items">';
//                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
//                        echo '<img src="/img/products/shenma/'.$x1.'" alt="'.$x1.'">';
//                        echo '</a>';
//                        echo '</div>';
//                    }
//                }
//                echo '</section>';
//                //阿瓦隆
//                $xs = scandir($dir."awalong/");
//                echo '<section class="bottom w openning5">';
//                foreach ($xs as $x1){
//                    if ($x1 != ".." && $x1 != "."){
//                        echo '<div class="products-items">';
//                        echo '<a href="./productItems/'.substr($x1,0,strpos($x1, '.')).'.html">';
//                        echo '<img src="/img/products/awalong/'.$x1.'" alt="'.$x1.'">';
//                        echo '</a>';
//                        echo '</div>';
//                    }
//                }
//                echo '</section>';
                ?>
        </main>
        <!--  -->

        <!--  -->
<?php
include "split/footer.php";
?>


