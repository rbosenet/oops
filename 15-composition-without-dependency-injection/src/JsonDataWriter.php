<?php

namespace App;

class JsonDataWriter extends BaseDataWriter
{
    public function write(Song $song): string
    {
        return json_encode($song) . "\n";
    }
}
