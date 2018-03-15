<?php 

class Person{

    private $name;
    private $lastName
    private $email;
    private$password;

    public function __construct($name,$email,$password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function setMail($email){
        $this->email = $email;
        echo "mail has been set up";
    }
    public function getMail(){
        return $this->email;
    }
    public function setName($name){
        $this->name = $name;
        echo "Name has been set up";
    }
    public function getName(){
        return $this->name;
    }
    public function setPassword($password){
        $this->password = $password;
        echo "Password has been set up";
    }
    public function getPassword(){
        return $this->password;

    }



}


?>