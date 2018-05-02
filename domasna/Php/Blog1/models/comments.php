<?php 
include_once("../config/db.php");
function addComment($data){

    $sql = "INSERT INTO comments (author,comment,publish_date) VALUES (:author,:comment,:publish_date)";

    $query = DB::Get()->prepare($sql);
    $query->bindValue(":author", $data["author"],PDO::PARAM_STR);
    $query->bindValue(":comment", $data["comment"],PDO::PARAM_STR);
    $query->bindValue(":publish_date", $data["publish_date"],PDO::PARAM_STR);
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

function updateComment($data){
    
    $sql = "UPDATE comments
            SET 
            comment = :comment,
            publish_date = :publish_date,
            pid = :pid
            WHERE
            author = :author";

    $query = DB::Get()->prepare($sql);
    $query->bindValue(":author",$data["author"],PDO::PARAM_STR);
    $query->bindValue(":comment",$data["comment"],PDO::PARAM_STR);
    $query->bindValue(":pid",$data["pid"],PDO::PARAM_INT);
    $query->bindValue(":publish_date",$data["publish_date"],PDO::PARAM_STR);
    $query->execute();
}
function deleteComment($author){
    
    $sql = "DELETE FROM comments WHERE author = :author";

    $query = DB::Get()->prepare($sql);
    $query->bindValue(":author",$author,PDO::PARAM_STR);
    $query->execute();
}

?>