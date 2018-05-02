<?php 

    include("../models/users.php");

$isValid = isset($_POST["firstname"]) && $_POST["firstname"] != "" && isset($_POST["lastname"]) && $_POST["lastname"] != "" && isset($_POST["password"]) && $_POST["password"] != "" && isset($_POST["email"]) && $_POST["email"] != "";
$updValid = isset($_POST["upd_firstname"]) && $_POST["upd_firstname"] != "" && isset($_POST["upd_lastname"]) && $_POST["upd_lastname"] != "" && isset($_POST["upd_password"]) && $_POST["upd_password"] != "" && isset($_POST["upd_email"]) && $_POST["upd_email"] != "";

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
                "avatar" => $_FILES["avatar"]
            ];

            addUser($data);

        }else { die("Allready registered with that email."); }
    }
}
if($updValid){

    $firstname = trim(ucfirst($_POST["upd_firstname"]));
    $lastname = ucfirst($_POST["upd_lastname"]);
    $email = filter_var($_POST["upd_email"],FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST["upd_password"],FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_HIGH);

    $data = [
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email,
        "password" => $password
    ];

    updateUser($data);

}

 $res = getUsers();

?>
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
<hr>

<h1>Add users</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
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

<hr>

<h1>Update users By Password</h1>
<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <label for="upd_firstname">Firstname</label>
        <input type="text" name="upd_firstname">
        <label for="upd_lastname">lastname</label>
        <input type="text" name="upd_lastname">
        <label for="upd_password">password</label>
        <input type="password" name="upd_password">
        <label for="upd_email">email</label>
        <input type="email" name="upd_email">
        <input type="submit">
    </form>


