<?php

// oop1.php

class Flomaster {
	private $boja; // property
	public function smeniBoja($nova_boja){ // method
		$boi = ['crvena', 'zelena', 'sina', 'crna', 'zolta'];
		if(in_array($nova_boja, $boi)){
			$this->boja = $nova_boja;
		} else {
			echo 'Ne postoi vakva boja: '.$nova_boja.'<br/>';
		}
	}
}
$f1 = new Flomaster;
$f2 = new Flomaster;
// $f1->boja = 'crvena';
// $f2->boja = 'zelena';
$f1->smeniBoja('ciklama');
$f2->smeniBoja('sina');
// print_r($f1);
// print_r($f2);
// ************************************************
// ************************************************
// ************************************************
class User {
	private $first_name;
	private $last_name;
	public $parent;
	public $flomaster;
	public function setFirstName($new_first_name){
		if(is_string($new_first_name)){
			$this->first_name = $new_first_name;
		}
	}
	public function setLastName($new_last_name){
		if(is_string($new_last_name)){
			$this->last_name = $new_last_name;
		}
	}
	public function getFirstName($security_level){
		if($security_level < 10){
			return $this->first_name;
		} else {
			echo "You don't have security clearance";
		}
	}
	public function getLastName($security_level){
		if($security_level < 5){
			return $this->last_name;
		} else {
			echo "You don't have security clearance";
		}
	}
}
$user_one = new User;
$user_two = new User;
$user_three = new User;
$user_one->setFirstName('Pero');
$user_one->setLastName('Perovski');
$user_two->setFirstName('Janko');
$user_two->setLastName('Jankovski');
$user_three->setFirstName('Stanko');
$user_three->setLastName('Stankovski');
// print_r($user_one);
// print_r($user_two);
// print_r($user_three);
// echo $user_one->first_name;
// echo $user_one->getFirstName(5);
// echo $user_one->getLastName(2);
$user_one->parent = $user_two;
$user_one->flomaster = $f2;
print_r($user_one);

?>