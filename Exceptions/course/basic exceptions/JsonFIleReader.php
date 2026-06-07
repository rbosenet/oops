<?php

class JsonFileReader 
{
    function readFileAsArray(string $filename):array 
    {
        if(!file_exists($filename))
            {
                throw new Exception("File Cannot BE found");
            }
            $content = file_get_contents($filename);
            $array = json_decode($content ,true);
            return $array;

    }
}





?>