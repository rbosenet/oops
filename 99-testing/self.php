<?php

 class Student 
 {
    
    public static ?self $selfInstance; // object of type Student or null

    function __construct(public string $name , public int $age)
    {

    }

    public static function instance(){
        
        // self::$selfInstance = 15; This causes fatal error as int is being assigned to ?self $selfInstance
        self::$selfInstance = new self ("Raja" ,13); // Instance of Student Class
        
    }

 }

  Student::instance();
  var_dump(Student::$selfInstance);




?>