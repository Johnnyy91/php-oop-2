<?php

require_once __DIR__ . '/general_product.php';

class Toys{
    public $material;
    public $age;

    function __construct($_material,$_age){
    $this-> material = $_material;
    $this-> age = $_age;
 }
}


?>