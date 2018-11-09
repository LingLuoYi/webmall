<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 2:15 PM
 */

require_once '/var/www/html/db/objectdb.php';
require_once '/var/www/html/model/Products.php';
require_once '/var/www/html/model/Menu.php';
require_once '/var/www/html/model/Banner.php';

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
        return  $dbhandle->getAll();
    }

    /**
     * 获取单个商品
     * @param $key
     * @return bool|mixed
     */
    function getOneProducts($key){
        $dbPath = '/var/www/html/db/dataDB/products.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return  $dbhandle->getValueForKey($key);
    }

    //删除商品
    function deleteProducts($key){
        $dbPath = '/var/www/html/db/dataDB/products.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $dbhandle->removeValueForKey($key);
    }

    /**
     * 添加菜单
     * @param $code
     * @param $name
     * @return mixed
     */
    function addMenu($code,$name){
        $dbPath = '/var/www/html/db/dataDB/menu.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $menu = new Menu();
        $menu->setCode($code);
        $menu->setName($name);
        return $dbhandle->setValueForKey($code,$menu);
    }

    /**
     * 获取全部菜单
     * @return mixed
     */
    function getAllMenu(){
        $dbPath = '/var/www/html/db/dataDB/menu.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getAll();
    }

    /**
     * 获取单个菜单
     * @param $key
     * @return mixed
     */
    function getOneMenu($key){
        $dbPath = '/var/www/html/db/dataDB/menu.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getValueForKey($key);
    }

    /**
     * 删除菜单
     * @param $key
     */
    function deleteMenu($key){
        $dbPath = '/var/www/html/db/dataDB/menu.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $dbhandle->removeValueForKey($key);
    }
    /**
     * 添加banner
     * @param $banner
     * @param $url
     * @param $name
     * @return bool
     */
    function addBanner($ban,$url,$type,$name){
        $dbPath = '/var/www/html/db/dataDB/banner.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $banner = new Banner();
        $banner->setBannerUrl($ban);
        $banner->setUrl($url);
        $banner->setType($type);
        $banner->setName($name);
        return $dbhandle->setValueForKey($name,$banner);
    }

    /**
     * 获取全部banner
     * @return mixed
     */
    function getAllBanner(){
        $dbPath = '/var/www/html/db/dataDB/banner.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getAll();
    }

    /**
     * 获取单个banner
     * @param $key
     * @return mixed
     */
    function getOneBanner($key){
        $dbPath = '/var/www/html/db/dataDB/banner.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getValueForKey($key);
    }

    /**
     * 删除banner
     * @param $key
     */
    function deleteBanner($key){
        $dbPath = '/var/www/html/db/dataDB/banner.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $dbhandle->removeValueForKey($key);
    }
}