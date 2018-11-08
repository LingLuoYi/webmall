<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 2:15 PM
 */

require_once '/var/www/html/db/objectdb.php';
require_once '/var/www/html/model/Products.php';

class ProductsServer
{
    /**
     * 添加商品
     * @param $name
     * @param $img
     * @param $state
     * @param $details
     * @return mixed
     */
    function add($name,$img,$state,$details,$type){
        $dbPath = '/var/www/html/db/dataDB/products.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        if (!$dbhandle){
            return false;
        }
        $products = new Products();
        $products->setName($name);
        $products->setImgUrl($img);
        $products->setState($state);
        $products->setDetails($details);
        $products->setCategory($type);
        return $dbhandle->setValueForKey($name,$products);
    }

    /**
     * 获取全部商品
     * @return mixed
     */
    function getAllProducts(){
        $dbPath = '/var/www/html/db/dataDB/products.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        if (!$dbhandle)
            return false;
        return  $dbhandle->getAll();
    }

    function getOneProducts($key){
        $dbPath = '/var/www/html/db/dataDB/products.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        if (!$dbhandle)
            return false;
        return  $dbhandle->getValueForKey($key);
    }

    //添加轮播图

}