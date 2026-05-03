<?php

require_once "book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";

// $book = new Book ; With abstract class this will give a fatal error as abstract classes
// cannot be intialised 

//You can however initialize child classes 
$physicalBook = new PhysicalBook("Physical Book" , "Raja" , 15 , 18.3);
$digitalBook = new DigitalBook("Digital Book" , "Raja" , 22 , 13.3);

var_dump($physicalBook);
var_dump($digitalBook);

echo $physicalBook->getShipping()."\n";
echo $digitalBook->getShipping();







?>