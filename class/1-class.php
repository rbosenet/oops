<?php

class Product
{   
    public $name; 
    public $price;
    public function __construct( $name , $price ) {
        $this->name = $name;
        $this->price = $price ;
    }
    public function price_as_currency($divisor = 1 , $currency_symbol = '$') {
        $price_as_currency = ($this->price/$divisor).$currency_symbol;
        return $price_as_currency;
    }
}

$product1 = new Product("shoe" , 30); // If product class has no constructor you could call Product without ()
echo $product1->name."\n";
echo $product1->price."\n";
$product1->price = 40;
echo $product1->price."\n";
echo $product1->price_as_currency(100 , '$');

?>