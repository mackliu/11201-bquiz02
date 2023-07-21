<?php
date_default_timezone_set("Asia/Taipei");
session_start();

include_once __DIR__ . "/Controller/Viewer.php";
include_once __DIR__ . "/Controller/User.php";
include_once __DIR__ . "/Controller/News.php";
include_once __DIR__ . "/Controller/Que.php";

function to($url){
    header("location:".$url);
}

$Viewer=new Viewer;
$User=new User;
$News=new News;
$Que=new Que;