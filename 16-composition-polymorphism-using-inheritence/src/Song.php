<?php

namespace App;

class Song
{
    public function __construct(
        public string $title,
        public string $artist,
        public int $duration,
        private BaseDataWriter $writer,
    ) {
    }

    public function write(): string
    {
        return $this->writer->write($this);
    }
}
