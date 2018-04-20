<?php 
$username = 'root';
$password = 'root';
$host = '127.0.0.1';
$dbname = 'blog';
// dsn - data source name
$dsn = 'mysql:host='.$host.';dbname='.$dbname;
// PDO - php data object
$DB = new PDO($dsn, $username, $password);
$isValid = 	isset($_POST['firstname'])
			&& $_POST['firstname'] != ''
			&& isset($_POST['lastname'])
			&& $_POST['lastname'] != ''
			&& isset($_POST['email'])
			&& $_POST['email'] != ''
			&& isset($_POST['password'])
			&& $_POST['password'] != '';
if($isValid){
	// $query = $DB->query("insert into users (firstname, lastname, email, password) values ($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])");
	// $query->execute();
	$sql = 'insert into users (firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)';
	$query = $DB->prepare($sql);
	$query->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
	$query->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
	$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
	$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
	$query->execute();
}
$sql = "select * from users";
$query = $DB->query($sql);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>



<form action="db1.php" method="post">
	<input type="text" name="firstname" placeholder="firstname">
	<input type="text" name="lastname" placeholder="lastname">
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">
	<button type="submit"> Save </button>
</form>

<table border="1" width="80%">
	<tr>
		<th>id</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
		<th>avatar</th>
		<th>password</th>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['firstname'];?></td>
		<td><?=$row['lastname'];?></td>
		<td><?=$row['email'];?></td>
		<td><?=$row['avatar'];?></td>
		<td><?=$row['password'];?></td>
	</tr>
	<?php } ?>
</table>



<!-- 
$un="korisnik"
$pw="lozinka or 1=1"
select * from users where username=$un and password=$pw
---
select * from users where username=korisnik and password=lozinka
---
select * from users where username=korisnik and password=lozinka or 1=1
                                                                ------- 
-->