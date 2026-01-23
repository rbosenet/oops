<?php

class PhysicalBook extends Book
{

    public $weight ; 

    public function __construct( string $title , string $author , int $price , float $weight )
    {
        parent::__construct( $title ,  $author ,  $price) ;
        $this->weight = $weight;
        
    }
    public function getWeight(): int
    {
        return $this->weight;
    }
   /*overriding print() method in parent class book */
    public function print(): string 
    {
        return "{$this->title}, {$this->author }, {$this->price }, {$this->weight}g ";
    }
    
}






?>