<?php

function intReturn ( int $num):int
{
    if ( $num == 0)
        {
            throw new Exception();
        }
    return $num;
    }

try 
{
    intReturn(0);
}

catch ( Exception $e) 
{
    echo "hi";

}





?>