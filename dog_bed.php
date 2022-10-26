<?php

require_once __DIR__ . '/general_product.php';

class Dog_bed{
    public $height;
    public $size;


    function __construct($_height,$_size){
    $this-> height = $_height;
    $this-> size = $_size;
 }
}



?>