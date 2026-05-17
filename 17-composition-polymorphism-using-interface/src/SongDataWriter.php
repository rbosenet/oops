<?php

    namespace App;
    class SongDataWriter implements DataWriterInterface
    {
        public function write(Song $song): string
        {
            return "Title is " .$song->title." Artist is ".$song->artist." Duration is ".$song->duration."\n";
        }
       
    }



?>
