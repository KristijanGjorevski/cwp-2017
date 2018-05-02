<?php 
    include("../models/posts.php");

$isValid = isset($_POST["title"]) && $_POST["title"] != "" && isset($_POST["content"]) && $_POST["content"] != "" && isset($_FILES["image"]);

$img_types = ["image/jpeg","image/jpg","image/gif","image/png"];
$img_size = 10000000; // 10mb

    // ADD NEW POST
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
    // UPDATE EXISTING POST
    if (isset($_POST["upd_id"])) {

        if(filter_var($_POST["upd_id"],FILTER_VALIDATE_INT)){

            $id = $_POST["upd_id"];            

            if (array_search($_FILES["upd_image"]["type"],$img_types) && $_FILES["upd_image"]["size"] <= 10000000) {

                $permalink = str_replace(" ","-",strtolower($_POST["upd_title"]));
                $publish_date = date("Y-m-d H:i:s");
                $data =[
                    "id" => $id,
                    "title" => $_POST["upd_title"],
                    "content" => $_POST["upd_content"],
                    "permalink" => $permalink,
                    "publish_date" => $publish_date,
                    "uid" => $_POST["upd_uid"],
                    "image" => $_FILES["upd_image"]["name"]
                ];
                updatePost($data);
            }           
        }        
    }

    if (isset($_POST["dlt_id"])) {

        if(filter_var($_POST["dlt_id"],FILTER_VALIDATE_INT)){

            $id = $_POST["dlt_id"];
            deletePost($id);
        }
    }
    
    $res = getPosts();
?>
     <h1>Read from Posts</h1>
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
<hr>
   <h1>Add Post</h1>
<form action="<?= $_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="number" name="uid">
    <input type="file" name="image">
    <button type="submit">Add Post</button>
</form>

<hr>
    <h1>Update Post by ID</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST" enctype="multipart/form-data">
        <label for="id">By ID</label>
        <input type="number" name="upd_id">
        <label for="title">title</label>
        <input type="text" name="upd_title">
        <label for="content">content</label>
        <input type="text" name="upd_content">
        <label for="uid">uid</label>
        <input type="number" name="upd_uid">
        <label for="image">Image</label>
        <input type="file" name="upd_image">
        <button type="submit">Update</button>
    </form>
<hr>

    <h1>Delete Post by ID</h1>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
    <label for="id">ID</label>
    <input type="text" name="dlt_id">
    <button type="submit">Delete Post</button>
</form>