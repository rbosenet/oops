<?php

require_once "Song.php";
require_once "SongHolder.php";
require_once "Album.php";
require_once "interface.php";

$album = new Album ();
$newSong = new Song("Mama Mia" , "Bony M");
$album->addSong($newSong);


$newSong = new Song("I Diss" , "Metallica");
$album->addSong($newSong);
var_dump($album);

// echo $album->getSongs();



?>