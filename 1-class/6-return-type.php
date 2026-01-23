<?php

class Product
{   
    public $name; 
    public $price;
    public function __construct( $name , $price ) {
        $this->name = $name;
        $this->price = $price ;
    }
    public function price_as_currency($divisor = 1 , $currency_symbol = '$'):string {
        $price_as_currency = ($this->price/$divisor).$currency_symbol;
        return $price_as_currency;
    }
}

$product = new Product("lux" , 15);
$price = $product->price_as_currency();
echo $price ;

?>