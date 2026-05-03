<?php

$simpleAutoload = function(string $className) {
    if(file_exists($className.'.php')){
        include "$className.php";
    }

};

spl_autoload_register($simpleAutoload);

$chart = new Chart ;
echo $chart->test();

?>