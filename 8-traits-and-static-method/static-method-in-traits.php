<?php

require_once "Book.php";
require_once "Song.php";

$book = new Book();

//generateHexId() in IdentifiableTrait.phpnis a static method 
 echo $book::generateHexId();



?>