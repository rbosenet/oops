<?php // aliasing using use

namespace SomeNameSpace;

require_once 'mysql-connection.php';
require_once 'postgresql-connection.php';
require_once 'mysql-connection-sub-namespace.php';



// $mySqlConnection = new MySql\subNameSpace\Connection();
// Instead of using the above long namespace we used use below 


// all namespace after use is fully qualified so you dont need to start with \
// Following means  MySql\subNameSpace\Connection as Connection not SomeNameSpace\MySql\subNameSpace\Connection as Connection . Since all namespaces after use
// are fully quailified namespaces from global namespace and not relative to current namespace
use MySql\subNameSpace\Connection ; 
$mySqlConnection = new Connection();// then directly use Connection()
print $mySqlConnection->connect() . PHP_EOL;

class Raja
{
    private string $dsn = 'no namespace Raja class';

    public function connect(): string
    {
        return 'Connecting to ' . $this->dsn;
    }
}

use Postgres\Raja as RajaAlias ; // cos Raja exists above

$rajaObj = new RajaAlias(); // Dont use \before RajaAlias
echo $rajaObj->connect().PHP_EOL;






