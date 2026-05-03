<?php

require_once "Identifiable.php";


class Song implements Identifiable

{

  use IdentifiableTrait;  

  private $id;
  private $name;
 
  public function getId():string {
        return $id;
    }
     public function getName():string {
        return $name;
    }
    public function setId( int $id ){
        $this->id;
    }
    public function setName( string $name ) {
        $this->name;
    }
}


?>