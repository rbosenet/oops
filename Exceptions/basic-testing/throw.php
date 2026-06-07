<?php



//Simple Throw 

function simpleThrow( $num )
{
   if ( $num == 0 ) {
      // throwing my own error . Execution goes to catch block 
      // Here Exception is a standad PHP base class for throwing user exceptions
      // We are calling its constructor with our exception message
      throw new Exception("Num is zero"); // throwing my own error . Execution goes to catch block 
      echo "after throw"; // does excute
   }
}

// try block is mandatory for a catch block
// catch block immedaitely follow try block
try {
   simpleThrow(0);
}

catch (Exception $e) { // Exception is the target class for the exception
   echo "Caught Exception"."\n";// This gets exceuted for the above try and then following statements are executed
}
echo "after catch";


// Now we are calling  simpleThrow without catch
//This gives Fatal Error Fatal error: Uncaught Exception: Num is zero[our exception message]
simpleThrow(0);



    








?>