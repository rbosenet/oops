<?php 

require("vendor/autoload.php");

$song = new App\Song ("I Disappear", "Metallica",300 , new App\SongDataWriter);//dependency injection
echo $song->write(); // SongDataWriter

$songJson = new App\Song ("I Disappear", "Metallica",300 , new App\JsonDataWriter);//dependency injection

echo $songJson->write(); // SongDataWriter
