<?php
//     if(isset($_GET["name"])){
//          print_r($_GET);
//     }
//     if(isset($_POST["name"])){
//         print_r($_POST);
//    }
   if(isset($_REQUEST["name"])){
    echo $name;
}
    
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="REQUEST" action="get_post.php">
        <div>
            <label>Name</label><br/>
            <input type="text" name="name">
        </div>
        <div>
            <label></label><br/>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>