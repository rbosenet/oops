<?php 

    trait IdentifiableTrait 
    {
        public function getHexId() : string 
        {
            return bin2hex(random_bytes(5));
        }

        // These abstract method needs to be in classes using this trait
        // Using the use keyword
        abstract public function getName():string;
        abstract public function getId():string;
        

        public function printIdentity ():string 
        {
            return $this->getName().':'.$this->getId();
        }
    }



?>