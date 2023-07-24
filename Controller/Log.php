<?php
include_once "DB.php";

class Log extends DB{
    function __construct()
    {
        parent::__construct('log');
    }
      
}