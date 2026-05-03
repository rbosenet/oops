<?php

require_once "Identifiable.php";
require_once "IdentifiableTrait.php";



class Book implements Identifiable
{
    use IdentifiableTrait;
    private $id;
    private $name;

  

    public function getId():string {
        return $this->id;
    }
     public function getName():string {
        return $this->name;
    }
    public function setId( int $id ){
        $this->id = $id;
    }
    public function setName( string $name ) {
        $this->name = $name;
    }
    
}


?>