<?php
namespace App;
class JsonDataWriter implements DataWriterInterface{

public function write(Song $song): string
        {
             return json_encode($song);
        }

}




?>
