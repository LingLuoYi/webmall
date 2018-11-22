<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/16
 * Time: 1:35 PM
 */
header("content-type:text/html;charset=utf-8");
require_once "../intercept/Intercept.php";
require_once "../server/ProductsServer.php";
$pr = new ProductsServer();

$basedir = dirname(__FILE__);

if (!$handle = fopen($basedir."/Template/dome.html","r")){
    echo '{"code":0,"msg":"打开模版失败"}';
    return ;
}

//读取模板内容
if (!$str = fread($handle,filesize($basedir."/Template/dome.html"))){
    echo '{"code":0,"msg":"读取模版失败"}';
    return ;
}
if (($src = $_POST['src']) == ""){
    echo '{"code":0,"msg":"没有详情图片地址"}';
    return ;
}
if (($name = $_POST['name']) == ""){
    echo '{"code":0,"msg":"没有模版名称"}';
    return ;
}


foreach ($pr->getAllNav() as $prs){
    if ($prs->getState() == 0){
        $nav .='<a href="'.$prs->getUrl().'">'.$prs->getName().'</a>';
    }
}

$str=str_replace("{{nav}}}", $nav, $str);
$str=str_replace("{[src]}",$src,$str);
$str=str_replace("{[about]}",$pr->getOneOther("footerabout"),$str);
$str=str_replace("{[marking]}",$pr->getOneOther("footeripc"),$str);
$str=str_replace("{[ipc]}",$pr->getOneOther("ipc"),$str);
fclose($handle);
$handle=fopen("/var/www/html/productItems/".$name.".html","wb");
fwrite($handle,$str);
fclose($handle);
////////////////////////////
echo '{"code":0,"msg":"成功","data":"http://bbiitt.cn/productItems/'.$name.'.html"}';