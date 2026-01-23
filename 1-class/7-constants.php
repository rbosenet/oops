<?php

//Constants can be set using either of the two methods 

define("HTTP" , 404);
const HTTPS = 405;

echo HTTP."\n" ;
echo HTTPS."\n";

class Connection 
{
   /* define("HTTP" , 404);
   Cant use this version of constants inside class 
   */
  public const NEWLINE = 'n';

  public function getNewLine():string
  {
    return self::NEWLINE; // access constants from inside class using self same as static property
  }

}

$connection = new Connection ;
echo $connection->getNewLine()."\n";

echo Connection::NEWLINE;

echo $connection->NEWLINE;




?>