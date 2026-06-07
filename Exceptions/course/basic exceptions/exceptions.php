<?php 

    require_once "JsonFIleReader.php";

    $data = new JsonFileReader;


    //Gives exception 
    try 
    {
        $item = $data->readFileAsArray("foo.json"); // Exception goes to catch 
        var_dump($item);
    }
    catch (Exception $e)
    {
        echo $e->getMessage()."\n";
    }

    // //Doesnt give any exceptions

    try 
    {
        $item = $data->readFileAsArray("data.json");// No exception here 
        var_dump($item);
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    

?>