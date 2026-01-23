<?php

// Use case of static property where the static value $counter++ sticks 
// But in case of non-static $counter++ doesnt stick as creating each object 
// resets it to 0 

class ClassWithStaticProperty
{
    public static int $counter = 0 ;

    public function __construct()
    {
        self::$counter++; // incrementing 
    }

}

$object1 = new ClassWithStaticProperty();
$object2 = new ClassWithStaticProperty();
//This will print 2 . static property value "sticks" as the static value is for the class
echo ClassWithStaticProperty::$counter."\n";


//If instead $counter is non static property
class ClassWithNonStaticProperty
{
    public int $counterNonStatic = 0 ;
    public function __construct()
    {
        $this->counterNonStatic++;
    } 
}

$object1 = new ClassWithNonStaticProperty();
$object2 = new ClassWithNonStaticProperty();
//This will print 1 . The value doesnt stick as when each object is created fron the class old
//counterNonStatic is lost and it gets reset to 0 
echo $object2->counterNonStatic;

?>