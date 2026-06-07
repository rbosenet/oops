<?php
Namespace App;

class Student

{
    // static property
    public static string $static_property;
    
    
    // Public properties
    public string $name = 'John';
    public int $age = 20;
    public string $course; // no value assigned

    // Private properties
    private string $email = 'john@example.com';
    private float $fees = 5000.50;
    private string $address; // no value assigned

    // Public method
    public function getName()
    {
        return $this->name;
    }

    // Private method
    private function calculateDiscount()
    {
        return $this->fees * 0.1;
    }
}

$student = new Student();

echo " var dump on \$student object dont show static properties ";
var_dump($student); //dont show static properties
echo "\n";

echo " get class variables show static properties ";
$class_vars = get_class_vars(Student::class);
var_dump($class_vars);
echo "\n";

echo " get object variables dont show static properties dont show private properties ";
$obj_var = get_object_vars($student); // dont show private properties
var_dump($obj_var);
echo "\n";




//Outputs 
/* Object(Student)#1 (4) {
  ["name"]=>
  string(4) "John"
  ["age"]=>
  int(20)
  ["course"]=>
  uninitialized(string)
  ["email":"Student":private]=> // Private property includes Class Name 
  string(16) "john@example.com"
  ["fees":"Student":private]=>
  float(5000.5)
  ["address":"Student":private]=>
  uninitialized(string)
}

*/