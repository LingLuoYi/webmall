<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 2:40 PM
 */


class img
{
    private $name;

    private $url;

    private $outUrl;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    function setUrl($url){
        $this->url = $url;
    }

    function getUrl(){
        return $this->url;
    }

    function setOutUrl($ourl){
        $this->outUrl = $ourl;
    }

    function getOutUrl(){
        return $this->outUrl;
    }
}