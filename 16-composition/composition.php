<?php 

require("vendor/autoload.php");

$song = new App\Song ("I Disappear", "Metallica",300);
$song_output = new App\SongDataWriter;
$song_output->write($song);