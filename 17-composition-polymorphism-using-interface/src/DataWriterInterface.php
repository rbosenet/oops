<?php

namespace App;

interface DataWriterInterface
{
    public function write(Song $song): string;
}
