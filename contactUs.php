<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 4:22 PM
 */

header("Content-type: text/html; charset=utf-8");
require_once("config/config.php");
require_once './server/ProductsServer.php';
$allProducts = new AllProducts();
$pr = new ProductsServer();
$menu = $pr->getAllMenu();
$dir = dirname(__FILE__) . "/img/products/";
$title = "矿机商城-联系我们";
include 'split/header.php';
?>
    <!--  -->

    <!--  -->
    <main class="main">
        <section class="banner" style="background: url('<?php echo $pr->getOneImg("联系")->getUrl();?>') no-repeat center bottom/100% 7.83rem #1e252e;">
            <p class="bannerTextTitle">联系我们</p>
            <p class="bannerTextContent"><?php echo $pr->getOneOther("contact");?></p>
        </section>

        <!--  -->
        <section class="contactUs">
            <p><?php echo $pr->getOneOther("contact2");?></p>
            <p><?php echo $pr->getOneOther("contact3");?></p>
            <ul class="contact-box w">
                <li>
                    <?php echo $pr->getOneOther("phone")?>
                </li>
                <li>
                    <?php echo $pr->getOneOther("qq")?>
                </li>
                <li id="wei">
                    <img id="wei_img" src="./img/wei.jpg" alt="蚂蚁区块链">
                    <a href="#">
                        <i></i>关注我们</a>
                </li>
                <li>
                    <?php echo $pr->getOneOther("email")?>
                </li>
            </ul>
        </section>
        <!--  -->
    </main>
    <!--  -->
    <!--  -->
<?php
require_once 'split/footer.php';
