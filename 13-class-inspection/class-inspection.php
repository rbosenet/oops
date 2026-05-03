<?php


require_once("vendor\autoload.php");


echo "Output of\App\User::class "."\n";
var_dump(\App\User::class); // Important: returns class name as string so you dont have to use '\App\User '
echo "\n";

//Check if the class exists (class_exists(class_name) )
$class_exist_string = class_exists('\App\User');
$class_exist = class_exists(\App\User::class); // same above verion but instead using ::class not hardcode class string
echo "Checks if class Exists "."\n";
var_dump($class_exist_string) ;
var_dump($class_exist) ;
echo "\n";

//Get Name of the class( get_class(object_initiated_from_the_class) )
$unknownObject = \App\UserFactory::create( 5, 'Raja');
$className = get_class($unknownObject); // returns class User
echo "Class name of Object "."\n";
var_dump($className);
echo "\n";

echo "Is Object instance of this Class ?"."\n";
$isUser = $unknownObject instanceof \App\User;
var_dump($isUser);
echo "\n";


//Get Parent of the class ( get_parent_class (child_object) )
$admin = new \App\Admin(20 , 'admin');
$parent_class = get_parent_class($admin);
echo "Parent Class is $parent_class"."\n";
echo "\n";

// Is sub class ( is_sub_class_of(child_class , parent_class) )
$isSubclass = is_subclass_of($admin, \App\User::class);
echo "Is sub class"."\n";
var_dump($isSubclass);
echo "\n";


//Array of interfaces, object/class implements : class_implements($name_of_object/class which implements the interface)
echo "Implements which interfaces?"."\n";
$classImplements = class_implements($admin);// works with object
var_dump($classImplements);
echo "\n";
$classImplements = class_implements(\App\User::class); //works with class
var_dump($classImplements);


// is_a: check if object or class [first argument] a sub-type of the class or interface [second argument]
$isUserInstance = is_a($admin, \App\AuthenticatedUsersInterface::class);
echo "Does object admin implements \App\AuthenticatedUsersInterface ? Yes "."\n";
var_dump($isUserInstance);

$dummyClass = new \App\DummyClass;
$isUserInstance = is_a($dummyClass, \App\AuthenticatedUsersInterface::class);
echo "Does object admin implements \App\AuthenticatedUsersInterface ? Yes "."\n";
var_dump($isUserInstance);

 
$isUserInstance = is_a($admin, \App\User::class);
echo "Is object admin  subclass of \App\User ? Yes "."\n";
var_dump($isUserInstance);



?>