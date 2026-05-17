<?php

namespace App;

abstract class BaseDataWriter
{
    abstract public function write(Song $song): string;
}
