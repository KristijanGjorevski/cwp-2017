<?php 
include_once("../config/db.php");
function addComment($data){

    $sql = "INSERT INTO comments (author,comment,publish_date) VALUES (:author,:comment,:publish_date)";

    $query = DB::Get()->prepare($sql);
    $query->bindValue(":author", $data["author"],PDO::PARAM_STR);
    $query->bindValue(":comment", $data["comment"],PDO::PARAM_STR);
    $query->bindValue(":publish_date", $data["publish_date"],PDO::PARAM_INT);
    // $query->bindValue(":pid", $data["pid"],PDO::PARAM_INT);
    $query->execute();

}

function getComment(){

    $sql = "SELECT * FROM comments";

    $query = DB::Get()->query($sql);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);

    return $res;
}

?>