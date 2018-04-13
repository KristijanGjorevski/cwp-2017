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

class User{

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

  $person[] = new User($value["name"],$value["lastname"],$value["password"],$value["email"]);
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
        if(Self::$speed == 100 ){
            echo "max speed";
        }else{
            while(Self::$speed <= 100) {
                echo "The speed is: ".Self::$speed." <br/>";
                ++self::$speed;

            } 
        }
    }

    public function breaking() {

       if(Self::$speed == 0){
            echo "car stopped";
       }else{
           while (Self::$speed >= 0) {
               echo "The speed is: ".Self::$speed." <br/>";
               --self::$speed;
           }
       }
    }
}


$merdzo = new Automobile("Mercedes","silver","gasoline");

echo "<br/>".$merdzo->accelerate();

echo "<br/>".$merdzo->breaking();



class Person {
    public $isAlive = true;
    
    function __construct($name) {
        $this->name = $name;
    }
    
    public function dance() {
      return "I'm dancing!";
    }
  }
  
  $me = new Person("Shane");
  
  if (is_a($me, "Person")) {
    echo "I'm a person, ";
  }
  if (property_exists($me, "name")) {
    echo "I have a name, ";
  }
  if (method_exists($me, "dance")) {
    echo "and I know how to dance!";
  }




  }
class Weapon {
    protected $model;
    protected $bulletType;
    protected $manufacturer;
    protected $max_num_bullets;
    protected $current_number_bullets;

    function reload(){
        $this->current_number_bullets = $this->max_num_bullets;
    }

    function shoot(){
        if($this->current_number_bullets == 0){
            //cannot shoot - must reload
        } else{
            $this->current_number_bullets--;
        }
    }
}


class Shotgun extends Weapon{
    
    private $bulletType = "Gauges";
    private static $number;
    public function __construct($modelType){
        $selection = ["KS-23" => ['man' => "Soviet Union",
                                  'no_bul'=> '6',
                                  'bul_type'=>'shell']
                
        ,"MAG-7" => "South Africa","Mossberg 930" => "United States" ,"Benelli M3" => "Italy"];

        if(array_key_exists($modelType,$selection)){

        $this->model = $modelType;
        $this->manufacturer = $selection[$modelType]['man'];
        $this->max_num_bullets = $selection[$modelType]['no_bul'];
        $this->bulletType = $selection[$modelType]['bul_type'];


        echo self::$number." of ".__CLASS__." created";
            self::$number++;
    }
}

$shutg = new Shotgun('KS-23');
$shutg->max


class SMG extends Weapon{

}
class SR extends Weapon{

}
class AR extends Weapon{

}
class Knife extends Weapon{

}






?>


