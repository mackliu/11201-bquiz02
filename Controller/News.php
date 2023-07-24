<?php
include_once "DB.php";

class News extends DB{
    function __construct()
    {
        parent::__construct('news');
    }
      

    function type($type){
        $array=[
            1=>"健康新知",
            2=>"菸害防治",
            3=>"癌症防治",
            4=>"慢性病防治"
        ];
        return $array[$type];

    }

    function backend(){
        $data=[
            'rows'=>$this->paginate(3), 
            'links' =>$this->links(),
            'start'=>($this->links['now']-1)*$this->links['num']+1
        ];

        $this->view("./view/backend/news.php",$data);
    }
}