<?php 

include_once("../config/db.php");

function getUsers(){
    $sql = "SELECT * FROM users";

    $query = DB::Get()->query($sql);
    $query->execute();

    $res = $query->fetchAll(PDO::FETCH_ASSOC);

    return $res;
}

function addUser($data){

    $sql = "INSERT INTO users(firstname,lastname,email,avatar,password) VALUES (:firstname,:lastname,:email,:avatar,:password)";

    $query = DB::Get()->prepare($sql);
    $query->bindValue(":firstname", $data["firstname"],PDO::PARAM_STR);
    $query->bindValue(":lastname", $data["lastname"],PDO::PARAM_STR);
    $query->bindValue(":email", $data["email"],PDO::PARAM_STR);
    $query->bindValue(":avatar", $data["avatar"],PDO::ATTR_PREFETCH);
    $query->bindValue(":password", $data["password"],PDO::PARAM_STR);
    $query->execute();

}

function checkEmail($email){
       
    $sql = "SELECT email FROM users WHERE email = :email";

    $query = DB::Get()->prepare($sql);
    $query->bindValue(":email",$email,PDO::PARAM_STR);
    $query->execute();
    $checkedEmail = $query->fetchAll(PDO::FETCH_ASSOC);

    if(array_search($email,$checkedEmail) !== null){

        return false;
    }else{ return true; }

}

?>