<?php
include_once "DB.php";

class User extends DB{
    function __construct()
    {
        parent::__construct('users');
    }

    function chk_acc($user){
        $chk=$this->count(['acc'=>$user['acc']]);
        if($chk>0){
            $chk=$this->chk_pw($user);
            if($chk>0){
                $_SESSION['user']=$user['acc'];
                return 1;
            }else{
                return 2;
            }
        }else{
            return 0;
        }
    }

    function chk_pw($user){
        return $this->count($user);
    }

    function backend(){
        $data=[
            'rows'=>$this->all(),  
        ];

        $this->view("./view/backend/user.php",$data);
    }
}