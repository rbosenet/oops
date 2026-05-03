<?php 
require_once "Printable.php";
class Connection {
    use Printable;// use trait 
    public static int $count = 0;

    public function __construct() {
        self::$count++;
    }
    public  static Function getCount():int{
        return self::$count;
    }
}
   





?>