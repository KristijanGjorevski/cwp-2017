<?php 


print_r($_FILES);

$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp,"uploads/".$filename);

?>