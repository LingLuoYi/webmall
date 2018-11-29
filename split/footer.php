<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 10:55 AM
 */
?>
<footer class="footer">
    <section class="aboutUs">
        <div class="inner w">
            <div class="about-us">
<!--                <p class="title">关于我们</p>-->
<!--                <p class="content">--><?php //echo $pr->getOneOther("footerabout")?><!--</p>-->
            </div>
            <nav class="footer-nav">
                        <span class="tech-supports">
                            <p>
                                <a href="javascript:;">全部产品</a>
                            </p>
                            <ul style="left: 15px">
                                <li>
                                    <a href="javascript:;">矿机</a>
                                </li>
                                <li>
                                    <a href="javascript:;">托管</a>
                                </li>
                            </ul>
                        </span>
                <span class="tech-supports">
                            <p>
                                <a href="javascript:;">售后服务</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="javascript:;">技术支持</a>
                                </li>
                                <li>
                                    <a href="javascript:;">矿机售后</a>
                                </li>
                            </ul>
                        </span>
                <span class="products-about">
                            <p>
                                <a href="javascript:;">关于我们</a>
                            </p>
                            <ul>
                                <li>
                                    <a href="javascript:;">公司简介</a>
                                </li>
                                <li>
                                    <a href="javascript:;">公司地址</a>
                                </li>
                            </ul>
                        </span>
                <span style="flex: none">
                    <div class="img-footer">
                        <div class="img-footer-one">
                            <div style="font-size: 0.13rem">大客户经理</div>
                            <img width="100%" height="100%" src="../img/dakefu.jpeg">
                        </div>
                        <div  class="img-footer-one">
                            <div style="font-size: 0.13rem">微信公众号</div>
                            <img width="100%" height="100%" src="../img/wei.jpg">
                        </div>
                    </div>
                </span>
            </nav>
        </div>
    </section>
    <p class="copyright"><?php echo $pr->getOneOther("footeripc")."<a href=\"http://www.miitbeian.gov.cn/\" target=\"_blank\">".$pr->getOneOther("ipc")."</a>"?></p>
</footer>
<!--  -->

</div>
<script src="./lib/jQuery/jquery-3.3.1.min.js"></script>
<script src="./lib/swiper/swiper.min.js"></script>
<script src="./js/common.js"></script>
<script>
    $(function () {
        new Swiper('.swiper-products', {
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

        <?php
            foreach ($menu as $menus){
               echo "$('.open".$menus->getCode()."').hide();\n";
               echo "$('.open1').click(function () {\n";
                echo "$('.open".$menus->getCode()."').hide();\n";
                echo "$('.openning1').show();\n";
                echo "})\n";
               echo "$('.".$menus->getCode()."').click(function () {\n";
               echo "$('.openning1').hide();\n";
               echo "$('.open".$menus->getCode()."').show();\n";
               foreach ($menu as $me){
                   if ($me->getCode()!= $menus->getCode()){
                       echo "$('.open".$me->getCode()."').hide();\n";
                   }
               }
               echo "})\n";

            }
        ?>
        /////////////////////////////////////
        var swiper = new Swiper('.swiper-index', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            autoplay: {
                delay: 5000,
            },
            mousewheel: {
                releaseOnEdges: true,
            },
            autoplay: true,
            speed: 2000,
            // loop: true
        });
        $('.swiper-index').on({
            'mouseenter': function () {
                $('.swiper-button-next').show();
                $('.swiper-button-prev').show();
            },
            'mouseleave': function () {
                $('.swiper-button-next').hide();
                $('.swiper-button-prev').hide();
            }
        });
        ///////////////////////////////////////////////
        $('.about').on('click', function () {
            $(this).addClass('current');
            $('.thought').removeClass('current');
            $('.xinDongThought').hide();
            $('.xinDongAbout').show();
        });
        $('.thought').on('click', function () {
            $(this).addClass('current');
            $('.about').removeClass('current');
            $('.xinDongAbout').hide();
            $('.xinDongThought').show();
        });
        $('.btn-jianjie').on('click', function () {
            $(this).addClass('current');
            $('.btn-shouhou').removeClass('current');
            $('.shouhou').hide();
            $('.jianjie').show();
        });
        $('.btn-shouhou').on('click', function () {
            $(this).addClass('current');
            $('.btn-jianjie').removeClass('current');
            $('.jianjie').hide();
            $('.shouhou').show();
        });
        ////////////////////////////////////////////////
        $("#wei").mouseenter(function () {
            $("#wei_img").css({
                "display":"inline"
            })
        });
        $("#wei" ).mouseleave(function () {
            $("#wei_img").css({
                "display":"none"
            })
        });
    });
</script>
<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10184269/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
</body>
</html>
