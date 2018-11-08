<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 10:15 AM
 */
header("Content-type: text/html; charset=utf-8");
$header = new Header();
?>
<!DOCTYPE html>
<html lang="cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/iconfont/iconfont.css">
    <link rel="stylesheet" href="../lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="../css/allProducts.css">
    <script src="../lib/jQuery/jquery-3.3.1.min.js"></script>
    <script src="../lib/swiper/swiper.min.js"></script>
    <script src="../js/common.js"></script>
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
            <a href="../index.html" id="logo">
                <h1>蚂蚁矿业</h1>
            </a>
            <nav class="header-nav">
                <?php
                foreach ($header->navigation as $nav){
                    echo $nav;
                }
                ?>
            </nav>
        </div>
        <div class="tip">
            <p class="w">
                    <span>
                        <i></i>公告</span><?php echo $header->notice?></p>
        </div>
    </header>
