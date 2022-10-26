<?php

class User{
    public $name;
    public $surname;
    protected $register = false;
    protected $credit_card;
    protected $discount = 1;

    function __construct($_name,$_surname){
        $this-> name =$_name;
        $this-> surname =$_surname;
    }

    protected function setDiscount(){
        $total_price = 0;
        if($register = true){
            $this-> $total_price = $total_price - (($discount * 20) / 100);
        }else{
            echo 'Not discount applied';
        }
    }




}



?>