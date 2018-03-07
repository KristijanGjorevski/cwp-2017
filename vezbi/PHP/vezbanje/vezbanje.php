<?php 

 class Person
 {

     static $age = 0;
     public $gender;
     private $name;

     public function setName($name)
     {
         $this->name = $name;

         echo "Hello all, i am ${name}, nice to meet you.";
     }
     public function getName(){
         return $this->name;
     }

     

 }
 
$class1 = new Person;


$scott = new Person;

$scott->setName("Scott");
$scott->getName();


?>