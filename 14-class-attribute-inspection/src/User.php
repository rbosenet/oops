<?php

namespace App;

class User implements AuthenticatedUsersInterface
    {   

        private $password;
        public $pub_property;
        
        public function __construct (private int $id =7 , private string $name ="Raj") 
        {

        }
        public function getId():int
        {
                return $this->id;
        }
         public function getName():string
        {
                return $this->name;
        }

        private function setPassword(string $password)
        {
                $this->password = $password;

                return $this;
        }

    }

?>