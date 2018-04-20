<?php 

$username = "root";
$password = "OXdPv08m04RhO6Cg";
$host = "127.0.0.1";
$db_name =  "blog";

// dsn
$dsn = "mysql:host={$host};dbname={$db_name};";

//create PDO
$db = new PDO($dsn,$username,$password);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

?>

<form action="db1.php" method="POST">
	<input type="text" name="firstname" placeholder="firstname">
	<input type="text" name="lastname" placeholder="lastname">
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">
	<input type="password2" name="password2" placeholder="repeat password">
	<button type="submit">Register</button>
</form>

<?php 

	
		
	if(isset($_POST["firstname"]) && isset($_POST["email"]) && isset($_POST["password"])){

		$firstname = trim($_POST["firstname"]);
		$lastname = trim($_POST["lastname"]);
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$confirm_pass = trim($_POST["password2"]);
	
		$firstname = filter_var($firstname,FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$email = filter_var($email,FILTER_SANITIZE_EMAIL);
		
			if($password == $confirm_pass){
				$password = filter_var($password,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW);
			} else { echo "Passwords don't match, they need to be exact<br>";}


		$sql = "INSERT INTO users (firstname,lastname,email,password) VALUES (:firstname,:lastname,:email,:password)";

		$query = $db->prepare($sql);
		$query->bindValue(":firstname",$firstname,PDO::PARAM_STR);
		$query->bindValue(":lastname",$lastname,PDO::PARAM_STR);
		$query->bindValue(":email",$email,PDO::PARAM_STR);
		$query->bindValue(":password",$password,PDO::PARAM_STR);
	   
		$query->execute();
	
		echo "User has been registered with fullname: {$firstname} {$lastname}, email: {$email}, password: {$password}.";
	}

		


?>