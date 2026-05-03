<?php

 class DefaultParam 

{   // No default arguments , calls to this method with no arguments cauces fatal error
    public function noDefaultParam(string $string ){
        return $string;

    }

    // handles when no arguments in function call
    public function DefaultParam(string $string ="null" ){
        return $string;

    }
    // handles when null is passed as argument plus when no value in args (default) it is handled using ="null"
    //?string means allow null and string
     public function NullParam(?string $string = "null" ){
        if(!$string) {
            $string = "NULL VALUE";
        }
        return $string;

    }

}


$testObj = new DefaultParam;

/*Fatal error: Uncaught ArgumentCountError: Too few arguments to function DefaultParam::noDefaultParam(),
0 passed */
// echo $testObj->noDefaultParam(); 

// Default argument , that is , when no arugument is passed .This is handled using ="null" in DefaultParam() method's parameter
 echo $testObj->DefaultParam()."\n"; 

echo $testObj->NullParam(NULL)."\n"; 



?>