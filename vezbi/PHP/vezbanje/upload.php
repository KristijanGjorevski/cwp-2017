<?php 

    if(isset($_POST["submit"])){

        $file = $_FILES["image"];

        echo '<pre>'; print_r($file); echo '</pre>';
        
        //$fileName = $_FILES["file"]["name"];


    }

?>

<form method="POST" enchtype="multipart/form-data">
<input type="file" name="image">
<input type="submit" placeholder="submit">
</form>