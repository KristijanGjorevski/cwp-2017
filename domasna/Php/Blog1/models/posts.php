<?php 

include_once("../config/db.php");

function getPost(){

    $sql = "SELECT * FROM posts";
    $query = DB::Get()->query($sql);
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);

    return $res;
}

function addPost($data){

    $sql = "INSERT INTO posts (title,permalink,content,publish_date,uid,image) VALUES (:title,:permalink,:content,:publish_date,:uid,:image)";

    $query = DB::Get()->prepare($sql);
    $query->bindValue(":title", $data["title"], PDO::PARAM_STR);
    $query->bindValue(":permalink", $data["permalink"], PDO::PARAM_STR);
    $query->bindValue(":content", $data["content"], PDO::PARAM_STR);
    $query->bindValue(":publish_date", $data["publish_date"], PDO::PARAM_INT);
    $query->bindValue(":uid", $data["uid"], PDO::PARAM_INT);
    $query->bindValue(":image", $data["image"], PDO::PARAM_STR);
    // $query->bindValue(":image_thumbnail", $data["image_thumbnail"], PDO::PARAM_STR);

    $query->execute();

}
?>