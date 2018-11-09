<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/9
 * Time: 3:13 PM
 */

class Banner
{
    private $bannerUrl;

    private $url;

    private $type;

    private $name;

    function setBannerUrl($bann){
        $this->bannerUrl = $bann;
    }

    function getBannerUrl(){
        return $this->bannerUrl;
    }

    function setUrl($url){
        $this->url = $url;
    }

    function getUrl(){
        return $this->url;
    }

    function setType($type){
        $this->type = $type;
    }

    function getType(){
        return $this->type;
    }

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}