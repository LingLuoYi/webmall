<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 10:55 AM
 */
header("Content-type: text/html; charset=utf-8");
$footer = new Footer();
?>
<footer class="footer">
    <section class="aboutUs">
        <div class="inner w">
            <div class="about-us">
                <p class="title">关于我们</p>
                <p class="content"><?php echo $footer->about?></p>
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
                            </ul>
                        </span>
                <span class="tech-supports">
                            <p>
                                <a href="./contactUs.html">技术支持</a>
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
                            </ul>
                        </span>
            </nav>
        </div>
    </section>
    <p class="copyright">2017-2018;深圳市蚂蚁区块链科技有限公司---<?php echo $footer->IPC?></p>
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
