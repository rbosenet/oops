<?php

namespace App;

class SongDataWriter extends BaseDataWriter
{
    public function write(Song $song): string
    {
        return "Title is " . $song->title . " Artist is " . $song->artist . " Duration is " . $song->duration . "\n";
    }
}
