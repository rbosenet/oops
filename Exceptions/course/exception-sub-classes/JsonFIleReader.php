<?php


class JsonFileReader 
{
    function readFileAsArray(string $filename):array 
    {
        if(!file_exists($filename))
            {
                throw new fileNotFound("Incoorect File Name");
            }
            $content = file_get_contents($filename);

            // using named parameters and using flags to raise exception when JSOn syntax wrong
            $array = json_decode(json:$content ,associative: true , flags:JSON_THROW_ON_ERROR);
            return $array;

    }
}





?>