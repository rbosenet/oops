<?php

class Product
{   
    public $name = "soap";
    public $price = 10;

    public function price_as_currency($divisor = 1 , $currency_symbol = '$') {
        $price_as_currency = ($this->price/$divisor).$currency_symbol;
        echo $price_as_currency;
    }
}

$product1 = new Product;

// Named arguments are usefull when you have parameters with default values eg in method price_as_currency() 
// above and you want to pass arguments to override only certain parameters with those default value
// eg only override $currency_symbol parameter
// Below code will give error as '&' is being passed to $divisor instead of $currency_symbol
// echo $product1->price_as_currency('&');

// Using named arguments instead
// argument should have label as same as parameter without $ sign and seperated by : from the argument value
echo $product1->price_as_currency(currency_symbol:'&');

?>