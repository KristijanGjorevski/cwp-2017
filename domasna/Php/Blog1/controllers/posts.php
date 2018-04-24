<?php 
    include("../models/posts.php");

$isValid = isset($_POST["title"]) && $_POST["title"] != "" && isset($_POST["content"]) && $_POST["content"] != "" && isset($_FILES["image"]);

$img_types = ["image/jpeg","image/jpg","image/gif","image/png"];
$img_size = 10000000; // 10mb

    if($isValid){

        if(array_search($_FILES["image"]["type"],$img_types) && $_FILES["image"]["size"] <= 10000000 /* 10mb */ ){

            $permalink = str_replace(" ","-",strtolower($_POST["title"]));
            $publish_date = date("Y-m-d H:i:s");
            $data = [
                    "title" => $_POST["title"],
                    "content" => $_POST["content"],
                    "permalink" => $permalink,
                    "publish_date" => $publish_date,
                    "uid" => $_POST["uid"],
                    "image" => $_FILES["image"]["name"]
                    // "image_thumbnail" => $_POST["image_thumbnail"]
            ];
            addPost($data);
            
        }else{ die("wrong file type or file size bigger than 10 mb");}

    }

    $res = getPost();
?>
    <h1>Add Post</h1>
<form action="<?= $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="number" name="uid">
    <input type="file" name="image">
    <button type="submit">Sub</button>
</form>

<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>permalink</th>
        <th>content</th>
        <th>publish date</th>
        <th>uid</th>
        <th>image</th>
        <th>thumbnail</th>
    </tr>
 <?php foreach ($res as $row) { ?>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["title"] ?></td>
        <td><?= $row["content"] ?></td>
        <td><?= $row["permalink"] ?></td>
        <td><?= $row["publish_date"] ?></td>
        <td><?= $row["uid"] ?></td>
        <td><?= $row["image"] ?></td>
    </tr>
     
<?php } ?> 

</table>