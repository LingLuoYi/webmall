<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 10:15 AM
 */
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="cn">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="芯动A9,a9,s11,芯动s11,芯动科技,芯动商城,蚂蚁区块链,挖矿教程,d9,芯动代理,芯动矿机商城">
    <meta name="copyright" content="本页面版权归深圳市蚂蚁区块链科技有限公司所有。">
    <meta name="description" content="8年矿机经验，为您提供完善的技术支持，售后支持，提供良好的挖矿体验。">
    <meta name="author" content="啦啦啦啦啦啦啦啦啦啦啦啦">
    <meta name="msvalidate.01" content="0078052C3ABB01D996A7E4692F7F9CDA" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/iconfont/iconfont.css">
    <link rel="stylesheet" href="../lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="../css/all.css">
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
            <a href="../index.php" id="logo">
                <h1>蚂蚁矿业</h1>
            </a>
            <nav class="header-nav">
                <?php
                foreach ($pr->getAllNav() as $prs){
                    if ($prs->getState() == 0){
                        echo '<a href="'.$prs->getUrl().'">'.$prs->getName().'</a>';
                    }
                }
                ?>
            </nav>
        </div>
