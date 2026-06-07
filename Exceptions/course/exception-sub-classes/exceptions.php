<?php 

    require_once "JsonFIleReader.php";
    require_once "fileNotFound.php";

    $data = new JsonFileReader;


    //Gives exception
    try 
    {
        $item = $data->readFileAsArray("data.json"); // Exception goes to catch 
        var_dump($item);
    }

    catch(fileNotFound $e)
    {
         print 'File Couldnt Be found: ' . $e->getMessage() . ' on line ' . $e->getLine() . ' in file ' . $e->getFile() . PHP_EOL;
    }

    catch (JsonException $e)
    {
        print 'JSON syntax error: ' . $e->getMessage() . ' on line ' . $e->getLine() . ' in file ' . $e->getFile() . PHP_EOL;
    }
    catch (Exception $e)
   
    {    
        var_dump($e);
        print 'A problem occurred: ' . $e->getMessage() . ' on line ' . $e->getLine() . ' in file ' . $e->getFile() . PHP_EOL;
    }

    

?>