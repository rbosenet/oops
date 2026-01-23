<?php

class MainClass 
{
    // Non Static Properties
    // visibility , type declaration , $propertyName (1) , default

    public int $nonStaticPropertyPublic = 10 ;
    private string $nonStaticPropertyPrivate;

    // Static Property 
    // visibility ,static, type declaration , $propertyName , default

    public static int $staticPropertyPublic = 15 ;
    private static string $staticPropertyPrivate = "Static Propety Private";

    // constant value dont change 

    public const CONSTANT_NAME = ' Constant Value';

    //Non Static Method
    public function nonStaticMethodPublic(){
       return $this->nonStaticPropertyPrivate = "Non Static Private Value "; // to access non static property inside the class use $this->property notice no $ before property name (2)

    }
    //Static Method
    public static function staticMethodPublic(){
        return self::$staticPropertyPrivate ; // to access static property inside the class use self::property , notice $property name  (3)

    }
}

$object = new MainClass;
echo $object->nonStaticPropertyPublic; //  (4) access non static property outside class $obj->property
echo "\n".$object->nonStaticMethodPublic(); // (4) access non static method outside class $obj->method()
echo "\n".MainClass::$staticPropertyPublic; //(5) access static property outside class using class::$property
echo "\n".MainClass::CONSTANT_NAME; //(6) access constant outside class using class::$property
echo "\n".MainClass::staticMethodPublic(); //(7) access static method outside class using class::method_name()






?>