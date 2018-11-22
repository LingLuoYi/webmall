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
require_once '/var/www/html/model/Navigation.php';
require_once '/var/www/html/model/Img.php';


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

    /**
     * 添加导航菜单
     * @param $name
     * @param $url
     * @param $state
     * @param $key
     * @return bool
     */
    function addNav($name,$url,$state,$key){
        $dbPath = '/var/www/html/db/dataDB/navigation.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $nav = new Navigation();
        $nav->setName($name);
        $nav->setUrl($url);
        $nav->setState($state);
        $nav->setKey($key);
        return $dbhandle->setValueForKey($key,$nav);
    }

    /**
     * 获取全部导航
     * @return mixed
     */
    function getAllNav(){
        $dbPath = '/var/www/html/db/dataDB/navigation.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getAll();
    }

    /**
     * 获取单个导航
     * @param $key
     * @return mixed
     */
    function getOneNav($key){
        $dbPath = '/var/www/html/db/dataDB/navigation.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getValueForKey($key);
    }

    /**
     * 删除导航
     * @param $key
     */
    function deleteNav($key){
        $dbPath = '/var/www/html/db/dataDB/navigation.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $dbhandle->removeValueForKey($key);
    }

    /**
     * 文案添加
     * @param $key
     * @param $value
     * @return mixed
     */
    function addOther($key,$value){
        $dbPath = '/var/www/html/db/dataDB/other.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->setValueForKey($key,$value);
    }

    /**
     * 获取全部文案
     * @return mixed
     */
    function getAllOther(){
        $dbPath = '/var/www/html/db/dataDB/other.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getAll();
    }

    /**
     * 获取单个文案
     * @param $key
     * @return mixed
     */
    function getOneOther($key){
        $dbPath = '/var/www/html/db/dataDB/other.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getValueForKey($key);
    }

    /**
     * 删除文案
     * @param $key
     */
    function deleteOther($key){
        $dbPath = '/var/www/html/db/dataDB/other.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $dbhandle->removeValueForKey($key);
    }

    //添加图片

    /**
     * 添加图片
     * @param $name
     * @param $url
     * @param $outerUrl
     * @return bool
     */
    function addImg($name,$url,$outerUrl){
        $dbPath = '/var/www/html/db/dataDB/img.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $img = new Img();
        $img->setName($name);
        $img->setUrl($url);
        $img->setOutUrl($outerUrl);
        return $dbhandle->setValueForKey($name,$img);
    }

    /**
     * 获取全部图片
     * @return mixed
     */
    function getAllImg(){
        $dbPath = '/var/www/html/db/dataDB/img.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getAll();
    }

    /**
     * 获取单张图片
     * @param $key
     * @return mixed
     */
    function getOneImg($key){
        $dbPath = '/var/www/html/db/dataDB/img.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getValueForKey($key);
    }

    /**
     * 删除图片
     * @param $key
     */
    function deleteImg($key){
        $dbPath = '/var/www/html/db/dataDB/img.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        $dbhandle->removeValueForKey($key);
    }

    /**
     * 添加用户
     * @param $user
     * @param $pass
     * @return bool
     */
    function addUser($user,$pass){
        $dbPath = '/var/www/html/db/dataDB/user.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->setValueForKey($user,$pass);
    }

    function getUser($user){
        $dbPath = '/var/www/html/db/dataDB/user.db';
        $dbhandle = objectdb::defaultdb($dbPath);
        return $dbhandle->getValueForKey($user);
    }
}