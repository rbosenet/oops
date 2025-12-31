<?php
/*

 Class type declarations - When classes are used in method arguments ,  method returns etc  . Its 
this example

*/

class Order {
    public $product = [];
    public function add_to_cart($product){}
    
}

class Product
{   
    public $name ;
    public $price ;
    

  public function __construct(string $name  , int $price){
    $this->name = $name;
    $this->price = $price;
    }
    
    public function price_as_currency($divisor = 1 , $currency_symbol = '$') {
        $price_as_currency = ($this->price/$divisor).$currency_symbol;
        echo $price_as_currency;
    }
}

/*To prevent type conversion eg string to integer use declare(strict_types=1);*/

$product1 = new Product([5,6] ,'b' );// error as first argument array 
var_dump($product1);
