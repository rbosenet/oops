<?php

    namespace App;
    class SongDataWriter
    {
        public function write (Song $song)
        {
            echo "Title :" .$song->title." Artist :".$song->artist." Duration :".$song->duration;
        }
    }



?>