<?php

class Song {
    private $name;
    private $artist;

    public function __construct(string $name , string $artist) {
        $this->name = $name;
        $this->artist = $artist;
    }
}