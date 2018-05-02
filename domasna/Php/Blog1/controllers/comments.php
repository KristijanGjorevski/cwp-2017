<?php 
include("../models/comments.php");

$isValid = isset($_POST["author"]) && $_POST["author"] != "" && isset($_POST["comment"]) && $_POST["comment"] != "";
$publish_date = date("Y-m-d H:i:s");

if($isValid){

    
    $data=[
        "author" => $_POST["author"],
        "comment" => $_POST["comment"],
        "publish_date" => $publish_date
    ];

    addComment($data);
}
if(isset($_POST["upd_author"]) && $_POST["upd_author"] != ""){

    $data = [
        "author" => $_POST["upd_author"],
        "comment" => $_POST["upd_comment"],
        "pid" => $_POST["upd_pid"],
        "publish_date" => $publish_date
    ];

    updateComment($data);
}

if (isset($_POST["dlt_author"]) && $_POST["dlt_author"] != ""){
    
    $author = $_POST["dlt_author"];

    deleteComment($author);
}



$res = getComment();

?>
<h1>Read from comments</h1>
<table>
<tr>
    <th>id</th>
    <th>author</th>
    <th>comment</th>
    <th>publish_date</th>
    <th>pid</th>
</tr>
<?php foreach ($res as $row) { ?>
        <tr>
            <td><?= $row["id"]?></td>
            <td><?= $row["author"]?></td>
            <td><?= $row["comment"]?></td>
            <td><?= $row["publish_date"]?></td>
            <td><?= $row["pid"]?></td>
        </tr>
  <?php } ?>
</table>

<h1>Add Comment</h1>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
    <label for="author">Author</label>
    <input type="text" name="author">
    <label for="comment">comment</label>
    <input type="text" name="comment">
    <input type="submit">
</form>
<hr>

<h1>Update Comments by Author</h1>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
    <label for="author">Author</label>
    <input type="text" name="upd_author">
    <label for="comment">comment</label>
    <input type="text" name="upd_comment">
    <label for="pid">Pid</label>
    <input type="text" name="upd_pid">
    <input type="submit">
</form>

<hr>

<h1>Delete Comments by Author</h1>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
    <label for="author">Author</label>
    <input type="text" name="dlt_author">
    <input type="submit" value="Delete">
</form>

