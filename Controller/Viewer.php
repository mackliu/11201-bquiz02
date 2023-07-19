<?php
include_once "DB.php";


class Viewer extends DB{

    function __construct()
    {
        parent::__construct('viewer');
    }

    function todayViewer(){
        $today=date("Y-m-d");
        if(!isset($_SESSION['viewer'])){
            $chk=$this->count(['date'=>$today]);
            if($chk>0){
                $row=$this->find(['date'=>$today]);
                $row['viewer']++;
                $this->save($row);
                $_SESSION['viewer']=1;
                return $row['viewer'];
            }else{
                $this->save(['date'=>$today,'viewer'=>1]);
                $_SESSION['viewer']=1;
                return 1;
            }
        }else{
            return $this->find(['date'=>$today])['viewer'];
        }
    }

    function totalViewer(){
        return $this->sum('viewer');
    }
}