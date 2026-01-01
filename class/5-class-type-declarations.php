<?php
/*

 Class type declarations - When classes are used in method arguments ,  method returns etc  . Its 
this example

*/

class Order {
    public $product = [];
    public function add_to_cart(Product $product){ // Class Type declaration
        $this->product[]=$product;
    }
    
}

class Product
{   
    public $name ;
    public $price ;
    
    public function __construct(string $name  , int $price){
    $this->name = $name;
    $this->price = $price;
    }
}


$order = new Order;
$product = new Product('lux' , 17 );

//This is the way to pass object to another object's method
$order->add_to_cart($product);
var_dump($order);

//Instead of an object you can also erroneously pass say a string which might cause error on code later
//This is prevented using class type declaration of the class name in add_to_cart method in Order Class
$order->add_to_cart("miss");
var_dump($order);



