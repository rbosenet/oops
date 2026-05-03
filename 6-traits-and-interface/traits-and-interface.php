<?php

require_once "Book.php";
require_once "Song.php";

$book = new Book();
echo $book->getHexId()."\n";

$song = new Song();
echo $song->getHexId()."\n";






?>