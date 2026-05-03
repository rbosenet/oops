<?php

    // get_class() : Gets the name of the class of the given object.
    // https://www.php.net/manual/en/function.get-class.php

    class BaseClass {

        public function get_class_name(object $obj = null){
            if(!$obj){
                return get_class($this);
            }
                return get_class($obj);

        }
    }

    class testClass {
    // test empty class
    }

    $testObj = new testClass ;
    $baseObj = new BaseClass ;

    echo $baseObj->get_class_name()."\n"; // class name of calling object
    echo $baseObj->get_class_name($testObj)."\n"; //class name of object in argument









?>