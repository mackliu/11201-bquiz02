<?php
include_once "DB.php";

class Log extends DB{
    function __construct()
    {
        parent::__construct('log');
    }
      
    function showGoods($news){
        $chk=$this->count(['user'=>$_SESSION['user'],'news'=>$news]);
        if($chk>0){
            return "收回讚";
        }else{
            return "讚";
        }
    }
}