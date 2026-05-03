<?php // mysql-connection.php

namespace MySql\subNameSpace;

class Connection
{
    private string $dsn = 'mysql-sub-name-space:dsn';

    public function connect(): string
    {
        return 'Connecting to ' . $this->dsn;
    }

    public  function parentNameSpaceConnect()
    {   print "Following is called from the function parentNameSpaceConnect() located in the namespace MySql\subNameSpace creating new Connection class in namespace \MySql\Connection". PHP_EOL;
        print " We use Fully Qualified Namespace \MySql\Connection()". PHP_EOL;
        /* new MySql\Connection() will not work as this becomes MySql\subNameSpace[current namespace]\MySql\Connection() */
        $mySqlConnection = new \MySql\Connection(); 
        return $mySqlConnection->connect() . PHP_EOL;
    }
}