<?php // mysql-connection.php

namespace MySql; //This means MySql namespace under general namespace which is no namespace 
                 //Dont Use \fully qualified name like \MySql

class Connection
{
    private string $dsn = 'mysql:dsn';

    public function connect(): string
    {
        return 'Connecting to ' . $this->dsn;
    }
}