<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/10
 * Time: 10:11 AM
 */

class Navigation
{
    private $name;

    private $url;

    private $state;

    private $key;

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

    function setState($state){
        $this->state = $state;
    }

    function getState(){
        return $this->state;
    }

    function setKey($key){
        $this->key = $key;
    }

    function getKey(){
        return $this->key;
    }
}