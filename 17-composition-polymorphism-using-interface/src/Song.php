<?php
namespace App;
class Song
{
    public function __construct (
        public string $title , public string $artist, public int $duration , private DataWriterInterface $writer, //dependency injection using interface
    ) 
    {
        
    } 
    public function write():string{
        return $this->writer->write($this);
    }                             
                                
}

?>
