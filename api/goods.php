<?php
include_once "../base.php";

$type=$_POST['type'];
unset($_POST['type']);
$_POST['user']=$_SESSION['user'];

$news=$News->find($_POST['news']);

switch($type){
    case 1:
        $Log->save($_POST);
        $news['goods']++;
    break;
    case 2:
        $Log->del($_POST);
        $news['goods']--;
    break;
    ;
}

$News->save($news);