<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/9
 * Time: 4:02 PM
 */
header("Content-type: text/html; charset=utf-8");
require_once "./server/ProductsServer.php";
$pr = new ProductsServer();
$menu = $pr->getAllMenu();
$dir = dirname(__FILE__) . "/img/products/";
$title = "蚂蚁矿业-矿机商城";
include 'split/header.php';
?>
    <!--  -->

    <!--  -->
    <main class="main">
        <?php
        $prd = $pr->getOneImg("首页");
        echo '<a href="'.$prd->getOutUrl().'"><section class="banner" style="background: url('.$prd->getUrl().') no-repeat center 0.05rem/100% 6.41rem #00000000;"></section></a>';
        ?>
        <!--  -->
<!--        <section class="server">-->
<!--            <div class="inner w">-->
<!--                <p class="ourServer">我们的服务</p>-->
<!--                <p class="slogan">全力为中小企业提供质量稳定、性能可靠、算力较高的矿机</p>-->
<!--                <ul class="serverList">-->
<!--                    <li>-->
<!--                        <div class="icon"></div>-->
<!--                        <p class="title">安全稳定</p>-->
<!--                        <p class="describe">专业人员驻场24小时待命</p>-->
<!--                        <p class="describe">挖矿更省心</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="icon"></div>-->
<!--                        <p class="title">公开透明</p>-->
<!--                        <p class="describe">平台收费公开透明</p>-->
<!--                        <p class="describe">官方统一售价</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="icon"></div>-->
<!--                        <p class="title">灵活投资</p>-->
<!--                        <p class="describe">矿机 托管 云算力一站式服务</p>-->
<!--                        <p class="describe">多种灵活的投资选择</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="icon"></div>-->
<!--                        <p class="title">规范管理</p>-->
<!--                        <p class="describe">从矿机生产到产生利益</p>-->
<!--                        <p class="describe">严格控制每个业务流程</p>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="icon"></div>-->
<!--                        <p class="title">贴心服务</p>-->
<!--                        <p class="describe">专业客服一对一</p>-->
<!--                        <p class="describe">为您提供优质服务</p>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </section>-->
        <!--  -->

        <section class="products w">
            <p class="products-show">产品展示</p>
            <div class="swiper swiper-container swiper-index">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($pr->getAllBanner() as $banner){
                        if ($banner->getType() == "index2"){
                            echo '<div class="swiper-slide">';
                            echo '<a href="'.$banner->getUrl().'">';
                            echo '<img src="'.$banner->getBannerUrl().'" alt="'.$banner->getName().'">';
                            echo '</a>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <div class="swiper-button-prev my-button-hidden" style="display: none;"></div>
                <!--左箭头-->
                <div class="swiper-button-next my-button-hidden" style="display: none;"></div>
                <!--右箭头-->
            </div>
            <p class="more-products">
                <a href="allProducts.html">更多商品</a>
            </p>
        </section>
    </main>
    <!--  -->

    <!--  -->
<?php
include 'split/footer.php';
