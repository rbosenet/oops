<?php

// You can use abstract Methods in traits 
// abstract public function getName():string;
// abstract public function getId():string;  in IdentifiableTrait.php 
// Beacuse of this , these methods needs to be implemented
// in Book.php and Song.php
// getName() & getId() and in turn used in the trait printIdentity.
// Using them as abstract method in traits ensures these methods are 
// compulsorily defined as others wise the trait printIdentity will fail

require_once "Book.php";
require_once "Song.php";

$book = new Book();

$book->setId(55);
$book->setName("The Pragmatic Programmer");



echo $book->printIdentity(); // This method is in IndetifiableTrait.php


?>