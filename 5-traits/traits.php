<?php
// trait is in Printable.php 
// We use , Use in Album and Connection class to include
// the trait.
// then call the trait with $object->getClassName()


require_once "SongHolder.php";
require_once "Album.php";
require_once "Connection.php";
require_once "Song.php";

$album = new Album();
$connection = new Connection();
echo $connection->getClassName()."\n"; // call the tari
echo $album->getClassName();// call trait

?>