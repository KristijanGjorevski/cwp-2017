<?php 

    include("../models/users.php");

$isValid = isset($_POST["firstname"]) && $_POST["firstname"] != "" && isset($_POST["lastname"]) && $_POST["lastname"] != "" && isset($_POST["password"]) && $_POST["password"] != "" && isset($_POST["email"]) && $_POST["email"] != "";

if($isValid){

    $firstname = trim(ucfirst($_POST["firstname"]));
    $lastname = ucfirst($_POST["lastname"]);
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST["password"],FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_HIGH);
    
    if($email){
        
        $emailcheck = checkEmail($email);

        if($emailcheck){

            $data =[
                "firstname" => $firstname,
                "lastname" => $lastname,
                "password" => $password,
                "email" => $email,
                "avatar" => $_POST["avatar"]
            ];

            addUser($data);

        }else { die("Allready registered with that email."); }
    }
}

 $res = getUsers();

?>


<h1>Add user</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname">
        <label for="password">password</label>
        <input type="password" name="password">
        <label for="email">email</label>
        <input type="email" name="email">
        <label for="Avatar">Avatar</label>
        <input type="file" name="avatar">'
        <input type="submit">
    </form>


<table>
    <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>password</th>
        <th>email</th>
        <th>avatar</th>
    </tr>

   <?php foreach ($res as $row) { ?>
    <tr>
        <td><?= $row["firstname"] ?></td>
        <td><?= $row["lastname"] ?></td>
        <td><?= $row["password"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["avatar"] ?></td>
    </tr>
   <?php } ?> 
</table>
