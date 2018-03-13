<?php 

 class Person
 {

     public $gender;
     private $name;
     private $email;
     private static $ageLimit = 40;

        public function __construct($name,$email,$gender)
        {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__." created<br/>";
        }

        public function __destruct(){
            echo __CLASS__. " destructed<br/>";
        }

     public function setName($name)
     {
        $this->name = $name;

         echo "Name is ${name}";
     }
     public function getName(){
         return $this->name."<br/>";
     }

     public static function getAgeLimit(){
         return self::$ageLimit;
     }

 }
 
    //static private
 echo Person::getAgeLimit();
 
    //static public
 //echo Person::$ageLimit;

//$class1 = new Person("Johndoe","jdoe@gmail.com","Male",22);

// echo $class1->getName();
// $scott = new Person;

// $scott->setName("Scott");
// $scott->gender = "Male";

// echo $scott->gender;

class Customer extends Person{
    private $balance;
        public function __construct($name,$email,$gender,$balance){

            parent::__construct($name,$email,$gender,$balance);
            $this->balance = $balance;

                echo "A new". __CLASS__." has been created<br/>";
        }
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
}

//$custumer1 = new Customer("John Doe","jdoe@gmail.com","Male",300);

//echo $custumer1->getBalance();



?>