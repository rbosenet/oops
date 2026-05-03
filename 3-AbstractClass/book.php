<?php

abstract class Book 
{
    protected $title;
    protected $author;
    protected $price;
    protected $shipping;

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
    abstract function getShipping():string;
}

?>