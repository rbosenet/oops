<?php // namespaces.php

require_once 'mysql-connection.php';
require_once 'postgresql-connection.php';
require_once 'mysql-connection-sub-namespace.php';


/* Below notation means MySql child namespace in current namespace which is global since there are no namespace*/
/*This format is qualified Namespace*/
$mySqlConnection = new MySql\Connection();

/* The above can also be written as below . This format starting with \is Fully Qualified Namespace*/

$mySqlConnection = new \MySql\Connection(); //* just like directory notation \ mean start from root . */

print $mySqlConnection->connect() . PHP_EOL;

/* sub name space inside mysql-connection.php*/
/*This format is qualified Namespace*/

$mySqlConnection = new MySql\subNameSpace\Connection();

print $mySqlConnection->connect() . PHP_EOL;

/* method in subnamespace creating class in parent namespace */
$mySqlConnection = new MySql\subNameSpace\Connection();

print $mySqlConnection->parentNameSpaceConnect();



