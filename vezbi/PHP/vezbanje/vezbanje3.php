<?php 
class Person{
    private $name;
    private $email;
    private static $ageLimit = 40;

    public function __construct($name,$email){
        echo __CLASS__ . " created<br/>";
        $this->name = $name;
        $this->email = $email;
    }

    public function __destruct(){
        echo __CLASS__ . " destroyed<br/>";
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail()
    {
        $this->email = $email;
    }
    public function getEmail($email)
    {
        return $this->email;
    }
    public static function getAgeLimit()
    {
        return self::$ageLimit;
    }

}

#static props and method
echo Person::$ageLimit;
echo Person::getAgeLimit();


//$person1 = new Person("John Doe", "jdoe@gmail.com");

//$person->name = "John Doe";

//$person1->setName("John Doe");

//echo $person->getName();
//echo $person->name;



class Costumer extends Person{
    private $balance;

    public function __construct($name,$email,$balance)
    {
        parent::__construct($name,$email,$balance);

        $this->balance = $balance;

        echo "A new ".__CLASS__." has been created<br/>";
    }


    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance(){
        return $this->balance . "<br/>";
    }
}


//$customer1 = new Costumer("John Doe","jdoe@gmail.com", 300);

//echo $customer1->getBalance();

?>



