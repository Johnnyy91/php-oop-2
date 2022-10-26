<?php

/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta */

require_once __DIR__ . '/general_product.php';

class Food{
   public $expire_date;
   public $type;
   public $weight;

    function __construct($_expire_date,$_type,$weight){
    $this-> expire_date = $_expire_date;
    $this-> type = $_type;
    $this-> weight = $_weight;
 }
}


?>