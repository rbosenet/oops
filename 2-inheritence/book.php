<?php

class Book 
{
    public $title;
    public $author;
    public $price;

    public function __construct( string $title , string $author , int $price ) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }
    public  function getTitile():string
    {
        return $this->title;
    }
     public function getAuthor():string
    {
        return $this->author;
    }
    public function getPrice():int
    {
        return $this->price;
    }
    public function print(): string 
    {
        return "{$this->title}, {$this->author }, {$this->price } ";
    }
}

?>