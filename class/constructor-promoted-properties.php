<?php

class Product
{   
    // public $name = "soap";
    // public $price = 10;

    //  public function __construct( $name ="test" ,  $price = 10 ){
    //     $this->name;
    //     $this->price;

    // }

    // Instead of the above we can declare member properties as parameters to the constructor
    // function with visibility such as private/ public and skip on two steps 
    // that is declaring member properties in class and then assigning values using 
    // $this->


    public function __construct(public $name ="test" , public $price = 10 ){

    }
    public function price_as_currency($divisor = 1 , $currency_symbol = '$') {
        $price_as_currency = ($this->price/$divisor).$currency_symbol;
        echo $price_as_currency;
    }

}

$soap = new Product('lux' , 58);
var_dump($soap);

?>


