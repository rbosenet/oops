<?php

namespace App;

class User implements AuthenticatedUsersInterface
    {   
        
        public function __construct (private int $id =7 , private string $name ="Raj") {

        }
    }

?>