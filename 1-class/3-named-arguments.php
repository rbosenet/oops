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

// Named arguments are useful when a method has parameters
// with default values and you only want to override
// specific parameters instead of passing every argument.
//
// Example:
// price_as_currency($divisor = 1, $currency_symbol = '$')
//
// Suppose you only want to change the currency symbol
// while keeping the default value of $divisor.

// This would cause a problem because '&' is passed as
// the first argument, so PHP treats it as the value
// for $divisor instead of $currency_symbol.
//
// echo $product1->price_as_currency('&');

// Using named arguments allows you to specify exactly
// which parameter you want to override.
//
// Syntax:
// parameter_name: value
//
// Use the parameter name without the $ sign.
echo $product1->price_as_currency(currency_symbol:'&');

?>