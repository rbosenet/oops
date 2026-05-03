<?php // inspecting-attributes.php

require_once 'vendor/autoload.php';

$user = new \App\User(5, 'Gary');

// Show classes Private Methods Dont Show
$classMethods = get_class_methods($user);
echo " Show All Class Methods :Private Methods Dont Show ";
var_dump($classMethods);
echo "\n";

//check if methhod exists : Private Methods Matches
echo " Check if method exists. Private Methods Show ";
$methodExists = method_exists($user, 'setPassword');
var_dump($methodExists);
echo "\n";


//Can method be called 
echo " Can the object's [first argument] method [second argument] be called";
$isCallable = is_callable([$user, 'setPassword']);
var_dump($isCallable);
echo "\n";

// Get class variables
echo " Get all class properties .Private not shown";
$props = get_class_vars(\App\User::class);
var_dump($props);
echo "\n";

// Get class variables
echo " Get all Object properties .Private not shown";
$objectVars = get_object_vars($user);
var_dump($objectVars);
echo "\n";
