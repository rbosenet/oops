<?php

/*
Following built in types can be used in method arguments , method returns etc 
null
bool
int
float (floating-point number)
string
array
object //not sure about this , didnt use this yet


*/

class Product
{   
    public $name ;
    public $price ;
    public $colors = [];
    

  public function __construct(string $name  , int $price , array $colors){  //type declarations
    $this->name = $name;
    $this->price = $price;
    $this->colors = $colors;
    }
    
    public function price_as_currency($divisor = 1 , $currency_symbol = '$') {
        $price_as_currency = ($this->price/$divisor).$currency_symbol;
        echo $price_as_currency;
    }
}

/*To prevent type conversion eg string to integer use declare(strict_types=1);*/

// error as arguments dont match the type in placeholder
// $product1 = new Product([5,6] ,'b', 15 );
// var_dump($product1);

//succesfull call 
$product1 = new Product("Good Night Ultra" ,60, ['red' , 'blue']);
var_dump($product1);
