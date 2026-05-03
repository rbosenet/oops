<?php

class DigitalBook extends Book
{

    private $fileSize ; 
   

    public function __construct( string $title , string $author , int $price , float $fileSize )
    {
        parent::__construct( $title ,  $author ,  $price) ;
        $this->fileSize = $fileSize;
        $this->shipping = "Download";
        
    }
    public function getfileSize(): int
    {
        return $this->fileSize;
    }
    /*overriding print() method in parent class book */
    public function print(): string 
    {
        return "{$this->title}, {$this->author}, {$this->price}, {$this->fileSize}kb ";
    }
    public function getShipping():string {
         return $this->shipping;
    }
    
}






?>