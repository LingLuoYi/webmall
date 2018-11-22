<?php
/**
 * 商品页菜单类
 * Created by PhpStorm.
 * User: liyi
 * Date: 2018/11/9
 * Time: 10:06 AM
 */


class menu
{
  private $code;

  private $name;

  function setCode($code){
      $this->code=$code;
  }

  function getCode(){
      return $this->code;
  }

  function setName($name){
      $this->name = $name;
  }

  function getName(){
      return $this->name;
  }
}