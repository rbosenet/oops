<?php

require_once("vendor\autoload.php");

use Symfony\Component\VarDumper\VarDumper;
use App\User;

$data = ['id'=>5 ,'name'=>'Raj'];

 echo VarDumper::dump($data);

 $user = new User ;
 echo VarDumper::dump($user);






?>