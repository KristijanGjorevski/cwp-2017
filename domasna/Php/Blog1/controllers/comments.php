<?php 
include("../models/comments.php");

$isValid = isset($_POST["author"]) && $_POST["author"] != "" && isset($_POST["comment"]) && $_POST["comment"] != "";

if($isValid){

    $publish_date = date("Y-m-d H:i:s");
    $data=[
        "author" => $_POST["author"],
        "comment" => $_POST["comment"],
        "publish_date" => $publish_date
    ];

    addComment($data);


}

$res = getComment();

?>

<form action="<?= $_SERVER["PHP_SELF"]?>" method="POST">
    <label for="author">Author</label>
    <input type="text" name="author">
    <label for="comment">comment</label>
    <input type="text" name="comment">
    <input type="submit">
</form>

<h1>Add Comment</h1>

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
