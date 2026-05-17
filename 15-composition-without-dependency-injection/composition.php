<?php

require "vendor/autoload.php";

$song = new App\Song("I Disappear", "Metallica", 300);
echo $song->writeText();
echo $song->writeJson();
