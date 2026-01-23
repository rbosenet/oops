<?php

require_once "book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";
$book = new Book("The Book" , "Herge" ,33);
echo $book->print()."\n";

$physicalBook = new PhysicalBook ("A Physical Book" , "Gosiciny" ,63 , 15.5);
$digitalBook = new DigitalBook ("A Digital Book" , "Daniel" ,53 , 75.5);

echo $physicalBook->print()."\n";
echo $digitalBook->print()."\n";


?>