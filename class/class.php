<?php

class Product
{   
    public $name = "soap";
    public $price = 10;

    public function price_as_currency($divisor = 1 , $currency_symbol = '$') {
        $price_as_currency = ($this->price/$divisor).$currency_symbol;
        return $price_as_currency;
    }
}

$product1 = new Product;
echo $product1->price."\n";
$product1->price = 30;
echo $product1->price."\n";
echo $product1->price_as_currency(100 , '&');

?>