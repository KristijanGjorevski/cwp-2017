<?php 

    include("../models/users.php");

$isValid = isset($_POST["firstname"]) && $_POST["firstname"] != "" && isset($_POST["lastname"]) && $_POST["lastname"] != "" && isset($_POST["password"]) && $_POST["password"] != "" && isset($_POST["email"]) && $_POST["email"] != "";
$edit_mode = false;

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

        }else { echo "Allready registered with that email."; }
    }

}
if (isset($_GET["delete"]) && $_GET["delete"] != "") {

    deletebyId($_GET["delete"]);
}


if(isset($_POST["updatee"]) && $_POST["updatee"] == "updatee"){

    $data=[
        "firstname" => $_POST["firstname"],
        "lastname" => $_POST["lastname"],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "id" => $_POST["id"]
    ];
    updateeUser($data);
    
}

if(isset($_POST["delete"]) && $_POST["delete"] == "delete"){

    $email = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);

    deleteUser($email);
}

if(isset($_GET["edit"]) && $_GET["edit"] != ""){
    $id = $_GET["edit"];
    $edit_mode = true;
    $edit_contents = editbyID($id);

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
        <td><?=$row["firstname"]?></td>
        <td><?=$row["lastname"]?></td>
        <td><?=$row["password"]?></td>
        <td><?=$row["email"]?></td>
        <td><?=$row["avatar"]?></td>
        <td><a href="<?=$_SERVER["PHP_SELF"]?>?edit=<?=$row["id"]?>">Edit</a></td>
        <td><a href="<?=$_SERVER["PHP_SELF"]?>?delete=<?=$row["id"]?>">Delete</a></td>
    </tr>
   <?php } ?> 
</table>
<hr>

<h1>Manage users table</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <input hidden type="text" name="id" value="<?php if(isset($edit_contents)){ echo $edit_contents[0]["id"]; }else {echo "";} ?>">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" value="<?php if(isset($edit_contents)){ echo $edit_contents[0]["firstname"]; }else {echo "";} ?>">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" value="<?php if(isset($edit_contents)){ echo $edit_contents[0]["lastname"]; }else {echo "";} ?>">
        <label for="password">password</label>
        <input type="password" name="password" value="<?php if(isset($edit_contents)){ echo $edit_contents[0]["password"]; }else {echo "";} ?>">
        <label for="email">email</label>
        <input type="email" name="email" value="<?php if(isset($edit_contents)){ echo $edit_contents[0]["email"]; }else {echo "";} ?>">
        <label for="Avatar">Avatar</label>
        <input type="file" name="avatar" value="<?php if(isset($edit_contents)){ echo $edit_contents[0]["avatar"]; }else {echo "";} ?>">
        <br>
        <?php if($edit_mode == false){ ?>
            <button type="submit" name="add" value="add">Add new user</button>
       <?php }else { ?>
        <button type="submit" name="updatee" value="updatee">Update user</button>
       <?php } ?>
        <br>
        <button type="submit" name="update" value="update">Update user by password</button>
        <br>
        <button type="submit" name="delete" value="delete">Delete user by email</button>
        <br>
    </form>

<br /><b>Notice</b>:  Undefined index: firstname in <b>C:\Users\Kiko\WebstormProjects\cwp-2017\domasna\Php\Blog1\controllers\users.php</b> on line <b>84</b><br />
<br /><b>Notice</b>:  Undefined index: lastname in <b>C:\Users\Kiko\WebstormProjects\cwp-2017\domasna\Php\Blog1\controllers\users.php</b> on line <b>88</b><br />
<br /><b>Notice</b>:  Undefined index: lastname in <b>C:\Users\Kiko\WebstormProjects\cwp-2017\domasna\Php\Blog1\controllers\users.php</b> on line <b>88</b><br />
<br /><b>Notice</b>:  Undefined index: email in <b>C:\Users\Kiko\WebstormProjects\cwp-2017\domasna\Php\Blog1\controllers\users.php</b> on line <b>92</b><br />