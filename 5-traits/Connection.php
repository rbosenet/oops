<?php 


class Connection {

    public static int $count =0;

    public function __construct() {
        self::$count++;
    }
    public  static Function getCount():int{
        return self::$count;
    }
}
   
$connection = new Connection();
$connection = new Connection();
$connection = new Connection();
$connection = new Connection();
echo $connection::getCount();


?>