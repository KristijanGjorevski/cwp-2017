<?php 

    if(isset($_POST["submit"])){

        $file = $_FILES["file"]["name"];

        echo '<pre>'; print_r($file); echo '</pre>';
        
        //$fileName = $_FILES["file"]["name"];


    }

?>