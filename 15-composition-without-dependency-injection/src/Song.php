<?php

namespace App;

class Song
{
    private SongDataWriter $textWriter;
    private JsonDataWriter $jsonWriter;

    public function __construct(
        public string $title,
        public string $artist,
        public int $duration,
    ) {
        $this->textWriter = new SongDataWriter(); // doesnt use dependency injection, we are creating the dependency inside the class
        $this->jsonWriter = new JsonDataWriter(); // doesnt use dependency injection, we are creating the dependency inside the class
    }

    public function writeText(): string
    {
        return $this->textWriter->write($this);
    }

    public function writeJson(): string
    {
        return $this->jsonWriter->write($this);
    }
}
