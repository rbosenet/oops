<?php

require "vendor/autoload.php";

$song = new App\Song("I Disappear", "Metallica", 300, new App\SongDataWriter);
echo $song->write();

$songJson = new App\Song("I Disappear", "Metallica", 300, new App\JsonDataWriter);
echo $songJson->write();
