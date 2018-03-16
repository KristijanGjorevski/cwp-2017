<?php 


$persarr = [
    [
        "name" => "Kiko",
        "lastname" => "kikoski",
        "password" => "555333",
        "email" => "kiko@gmail.com"
    ],
    [
        "name" => "Miki",
        "lastname" => "Miski",
        "password" => "444222",
        "email" => "kiko@gmail.com"
    ],
    [
        "name" => "Neno",
        "lastname" => "Nenski",
        "password" => "333111",
        "email" => "kiko@gmail.com"
    ],
    [
        "name" => "Fico",
        "lastname" => "Ficski",
        "password" => "222000",
        "email" => "kiko@gmail.com"
    ],
    [
        "name" => "Maja",
        "lastname" => "Majaac",
        "password" => "111999",
        "email" => "kiko@gmail.com"
    ]
];

class Person{

    private $name;
    private $lastName;
    private $email;
    private $password;

    public function __construct($name,$lastName,$email,$password)
    {
        //echo "New ".__CLASS__." created with name";

        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public function setMail($email){
        $this->email = $email;

    }
    public function getMail(){
        return $this->email;
    }
    public function setName($name){
        $this->name = $name;

    }
    public function getName(){
        return $this->name;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;

    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setPassword($password){
        $this->password = $password;

    }
    public function getPassword(){
        return $this->password;

    }



}

foreach ($persarr as $value) {
    //echo '<pre>'; print_r($value); echo '</pre>';

  $person[] = new Person($value["name"],$value["lastname"],$value["password"],$value["email"]);
  echo "<br/>Person with name : ".$value["name"];  
}


class Automobile {

    public $type;
    private $color;
    private $gas;

    private static $speed = 0;

    public function __construct($type,$color,$gas)
    {
        $this->type = $type;
        $this->color = $color;
        $this->gas = $gas;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType($type)
    {
        return  $this->type;
    }
    public function setColor($color)
    {
        $colorType = ["black","silver","white"];

        if($color = in_array($color,$colorType)){

            $this->color = $color;
        }else{
            echo "No such color exists for this type of veichle";
        }
    }
    public function getColor()
    {
        return  $this->color;
    }
    public function setGas($gas)
    {
        return  $this->gas = $gas;
    }
    public function getGas()
    {
        return  $this->gas;
    }

    public function accelerate(){
        if($speed > 100 ){

            echo "max speed";

        }else{
            while($speed < 100) {
                echo "The speed is: $speed <br/>";
                $speed++;
            } 
        }
    }

    public function breaking() {

       if($speed <= 0){
            echo "car stopped";
       }else{
           while ($speed > 0) {
               echo "The speed is: $speed <br/>";
               $speed--;
           }
       }
    }
}


$merdzo = new Automobile("Mercedes","silver","gasoline");

echo "<br/>".$merdzo->accelerate();

?>


