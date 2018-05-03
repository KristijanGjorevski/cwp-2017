<?php 

    include("../models/users.php");

$isValid = isset($_POST["firstname"]) && $_POST["firstname"] != "" && isset($_POST["lastname"]) && $_POST["lastname"] != "" && isset($_POST["password"]) && $_POST["password"] != "" && isset($_POST["email"]) && $_POST["email"] != "";

if($isValid){

    $firstname = trim(ucfirst($_POST["firstname"]));
    $lastname = ucfirst($_POST["lastname"]);
    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST["password"],FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_HIGH);
    
    if($email){
        
        if(isset($_POST["update"]) && $_POST["update"] == "update"){

            $data = [
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email,
                "password" => $password
            ];
        
            updateUser($data);
        }

        if(isset($_POST["add"]) && $_POST["add"] == "add"){

            $emailcheck = checkEmail($email);

            if($emailcheck){

                $data =[
                    "firstname" => $firstname,
                    "lastname" => $lastname,
                    "password" => $password,
                    "email" => $email
                    // "avatar" => $_FILES["avatar"]
                ];
    
                addUser($data);
            }

        }else { die("Allready registered with that email."); }
    }
}

if(isset($_POST["delete"]) && $_POST["delete"] == "delete"){

    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);

    deleteUser($email);
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

<h1>Manage users table</h1>
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
        <br>
        <button type="submit" name="add" value="add">Add new user</button>
        <br>
        <button type="submit" name="update" value="update">Update user by password</button>
        <br>
        <button type="submit" name="delete" value="delete">Delete user by email</button>
        <br>
    </form>



