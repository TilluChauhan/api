<?php
 class Human{
     private $gender;
     
     public function hello(){
        echo  $this->gender;
        
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



$test = new Human();
$test->gender ="male";



$test->hello();
?>