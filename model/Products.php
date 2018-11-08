<?php
/**
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/8
 * Time: 2:37 PM
 */

class Products
{
    private $name;

    private $imgUrl;

    private $state;

    private $details;

    private $category;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    function setImgUrl($imgUrl){
        $this->imgUrl = $imgUrl;
    }

    function getImgUrl(){
        return $this->imgUrl;
    }

    function setState($state){
        $this->state = $state;
    }

    function getState(){
        return $this->state;
    }

    function setDetails($details){
        $this->details = $details;
    }

    function getDetails(){
        return $this->details;
    }

    function setCategory($category){
        $this->category = $category;
    }

    function getCategory(){
        return $this->category;
    }
}