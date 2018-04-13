<?php
echo "test";


$username = "root";
$password = "";
$host = "127.0.0.1";
$dbname = "blog";

// data source name - dsn
$dsn = "mysql:host=".$host.";dbname=".$dbname;

// PDO - php data object


$DB = new PDO($dsn, $username, $password);

$isValid = isset($_POST["firstname"])
	&& $_POST["firstname"] != ""
	&&	isset($_POST["lastname"])
	&& $_POST["lastname"] != ""
	&&	isset($_POST["email"])
	&& $_POST["email"] != ""
	&&	isset($_POST["password"])
	&& $_POST["password"] != "";

	if ($isValid) {
		$sql = "insert into users (firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)";
	
		$query = $DB->prepare($sql);

		$query->bindValue(":firstname", $_POST["firstname"], PDO::PARAM_STR);
		$query->bindValue(":lastname", $_POST["lastname"], PDO::PARAM_STR);
		$query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
		$query->bindValue(":password", $_POST["password"], PDO::PARAM_STR);

		$query->execute();
	}

/*print_r($DB);*/

$sql = "select * from users";
$query = $DB->query($sql);
$query->execute();

/*echo "<pre>";
print_r($query->fetchAll(PDO::FETCH_ASSOC));
echo "</pre>";
*/
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>
	<form method="POST" autocomplete="off">
		<input type="text" name="firstname" placeholder="firstname" autocomplete="false">
		<input type="text" name="lastname" placeholder="lastname" autocomplete="false">
		<input type="email" name="email" placeholder="email" autocomplete="false">
		<input type="password" name="password" placeholder="password" autocomplete="false">
		<button type="submit"> Save </button>
	</form>

	<table>
		<tr>
			<th>id</th>
			<th>lastname</th>
			<th>email</th>
			<th>avatar</th>
			<th>password</th>
		</tr>

		<?php //echo "<pre>"; print_r($res); echo "</pre>"; ?>
<?php foreach ($res as $value) { ?>

		<tr>
			<td><?=$value["id"]?></td>
			<td><?=$value["lastname"]?></td>
			<td><?=$value["email"]?></td>
			<td><?=$value["avatar"]?></td>
			<td><?=$value["password"]?></td>
		</tr>

<?php } ?>

	</table>