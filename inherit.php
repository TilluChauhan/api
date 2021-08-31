<?php
 class Human{
     private $gender;
     Public $name;
     public function hello(){
        echo  $this->gender;
        echo $this->name;
     }
     public function __get($property){
         echo "you are try to access non existing property($property)\n";
     }
     public function __set($property, $value){
       // echo  "this is non existing or private property: $property";
        if(property_exists($this, $property)){
            $this->$property = $value;

        }else{
            echo "property does not exist:$property";
        }
     }
 }


class Student extends Human{
    
}
$test = new Student();
$test->gender ="male";

$test->name="Tushar";

$test->hello();
?>