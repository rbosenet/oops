<?php

// require 'mysql-connection-sub-namespace.php';
// require 'postgresql-connection.php';
// require 'mysql-connection.php';

use MySql\subNameSpace\Connection;

$simpleAutoload = function(string $className) {
     echo $className;
     die();
    if(file_exists($className.'.php')){
        include "$className.php";
    }

};

spl_autoload_register();
$mysql = new Connection;

// echo $mysql->connect();


?>
