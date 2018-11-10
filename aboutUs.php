<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 3:54 PM
 */
header("Content-type: text/html; charset=utf-8");
require_once("config/config.php");
require_once './server/ProductsServer.php';
$allProducts = new AllProducts();
$pr = new ProductsServer();
$menu = $pr->getAllMenu();
$dir = dirname(__FILE__) . "/img/products/";
$title = "矿机商城-关于我们";
include 'split/header.php';
?>
 <!--  -->

    <!--  -->
    <main class="main">
        <section class="banner" style="background: url('<?php $img=$pr->getOneImg("关于"); echo $img->getUrl();?>') no-repeat center bottom/100% 8.19rem #112545;">
            <div class="banner-box w">
                <div class="xinDongThought" style="display: none;">
                    <h3 class="xinDongTextTitle">铸造辉煌</h3>
                    <p class="xinDongTextContent1"><?php echo $pr->getOneOther("thought"); ?></p>
                    <p class="xinDongTextContent2"><?php echo $pr->getOneOther("thought2");?></p>
                </div>
                <div class="xinDongAbout">
                    <h3 class="xinDongTextTitle">蚂蚁</h3>
                    <p class="xinDongTextContent1"><?php echo $pr->getOneOther("about2");?></p>
                    <p class="xinDongTextContent2"><?php echo $pr->getOneOther("about3");?></p>
                </div>
                <ul>
                    <li>
                        <a href="javascript:" class="thought">思想</a>
                    </li>
                    <li>
                        <a href="javascript:" class="about current">关于</a>
                    </li>
                </ul>
            </div>

        </section>

        <!--  -->
        <section class="aboutUs">
            <div class="top">
                <p class="w">
                    <a href="javascript:" class="btn-jianjie">公司简介</a>
                    <a href="javascript:" class="btn-shouhou current">售后指南</a>
                </p>
            </div>
            <div class="bottom">
                <div class="details w">
                    <img class="jianjie" src="<?php echo $pr->getOneImg("简介")->getUrl(); ?>" alt="蚂蚁区块链" style="display: none;">
                    <img class="shouhou" src="<?php echo $pr->getOneImg("售后")->getUrl();?>" alt="芯动科技">
                </div>
            </div>
        </section>
        <!--  -->
    </main>
    <!--  -->

    <!--  -->
<?php
require_once 'split/footer.php';
