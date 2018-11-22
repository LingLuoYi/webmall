<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/7
 * Time: 4:05 PM
 */
header("Content-type: text/html; charset=utf-8");
require_once "./server/ProductsServer.php";
$pr = new ProductsServer();
$menu = $pr->getAllMenu();
$dir = dirname(__FILE__) . "/img/products/";
$title = "矿机商城-产品";
include "split/header.php";
?>

<div class="tip">
    <p class="w">
                    <span>
                        <i></i>公告</span><?php echo $pr->getOneOther("Notice")?></p>
</div>
</header>
        <!--  -->

        <!--  -->
        <main class="main">
            <section class="top w">
                <div class="swiper-container swiper-products swiper" style="width: 100%">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($pr->getAllBanner() as $banner){
                            if ($banner->getType() == "Products"){
                                echo '<div class="swiper-slide">';
                                echo '<a href="'.$banner->getUrl().'">';
                                echo '<img src="'.$banner->getBannerUrl().'" alt="'.$banner->getName().'">';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>




            <div class="w-nav">
                <ul>
                    <li class="active choose open1">全部矿机</li>
                    <?php
                    foreach ($menu as $prs){
                        echo '<li class="choose '.$prs->getCode().'">'.$prs->getName().'</li>';
                    }
                    ?>
                </ul>
            </div>
            <!--全部-->
                <?php
                echo '<section class="bottom w openning1">';
                foreach ($pr->getAllProducts() as $prs){
                    if ($prs->getState() == 0) {
                            echo '<div class="products-items">';
                            echo '<a href="' . $prs->getDetails() . '">';
                            echo '<img src="' . $prs->getImgUrl() . '" alt="' . $prs->getName() . '">';
                            echo '</a>';
                            echo '</div>';
                    }
                }
                echo '</section>';
                foreach ($pr->getAllMenu() as $prm){
                    echo '<section class="bottom w open' .$prm->getCode(). '">';
                    foreach ($pr->getAllProducts() as $prs) {
                        if ($prs->getCategory() == $prm->getCode()) {
                            if ($prs->getState() == 0) {
                                echo '<div class="products-items">';
                                echo '<a href="' . $prs->getDetails() . '">';
                                echo '<img src="' . $prs->getImgUrl() . '" alt="' . $prs->getName() . '">';
                                echo '</a>';
                                echo '</div>';
                            }
                        }
                    }
                    echo '</section>';
                }
                ?>
        </main>
        <!--  -->

        <!--  -->
<?php
include "split/footer.php";
?>


