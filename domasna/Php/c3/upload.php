<?php 

echo '<pre>'; print_r($_FILES); echo '</pre>';

$filename = $_FILES["textfile"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp,"uploads/".$filename);

?>