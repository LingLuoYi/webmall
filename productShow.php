<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 2:48 PM
 */
header("Content-type: text/html; charset=utf-8");
require_once("config/config.php");
require_once './server/ProductsServer.php';
$allProducts = new AllProducts();
$pr = new ProductsServer();
$menu = $pr->getAllMenu();
$dir = dirname(__FILE__) . "/img/products/";
$title = "矿机商城-热销产品";
include 'split/header.php';
?>
    <!--  -->

    <!--  -->
    <main class="main">
        <a href="<?php $img = $pr->getOneImg("热销1"); echo $img->getOutUrl();?>">
            <section class="banner" style="background: url('<?php echo $img->getUrl();?>') no-repeat center bottom/100% 7.83rem #141b21;"></section>
        </a>

        <!--  -->
        <section class="product-details w">
            <div class="describe-box">
                <div class="product">
                    <div class="top">
                        <img src="<?php $img2 = $pr->getOneImg("热销2"); echo $img2->getUrl();?>" alt="<?php echo $img2->getName(); ?>">
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
    </main>
    <!--  -->

    <!--  -->
<?php
require_once 'split/footer.php';