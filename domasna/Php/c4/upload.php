<?php 


if (isset($_POST["submit"])) {
     echo '<pre>'; print_r($_FILES["upload"]); echo '</pre>';

    $file_name = $_FILES["upload"]["name"];
    $file_type = $_FILES["upload"]["type"];
    $tmp_name = $_FILES["upload"]["tmp_name"];
    $error = $_FILES["upload"]["error"];
    $file_size = $_FILES["upload"]["size"];
    
    if ($error === 0) {

      $user_upload_name  = explode(".",$file_name);
      $user_file_type = strtolower(end($user_upload_name));
      

      $allowed_file_types = [
          "text/plain",
          "image/png"
      ];

        if (in_array($file_type,$allowed_file_types)) {

            $allowed_file_size = 10000; // Bytes

            if ($file_size < $allowed_file_size) {

            
                $check_file = file_exists("upload/" . $file_name.".".$user_file_type);

                if($check_file){

                        $new_file_name = $file_name.$user_file_type; ///// problem
                        $new_file_loc = "upload/".$new_file_name;

                      move_uploaded_file($tmp_name,$new_file_loc);

                      echo "Your file ${new_file_name} has been uploaded with the contents";

                }else{

                    move_uploaded_file($tmp_name,"upload/".$file_name);
                    echo "Your file ${file_name} has been uploaded with the contents";

                }                    
                
            }else {
                echo "file size too big, try smaller file";
            }

        }else {
            echo "file type not supported, try a different file, ex: .txt";
        }


    }else{
        echo "You need to upload a file";
    }

}else{
    echo "Talk to a support of this site";
}

//////////////////////////// open write count close

$handle = fopen("upload/".$file_name , "r+");

$get_content = fread($handle, filesize("upload/".$file_name));

 $count_letters = strlen($get_content);

 $words = explode(" ", $get_content);
 $count_words = count($words);


 $sentences = explode(".", $get_content);
 $count_sentences = count($sentences);

 		$more_then_seven =[];
 		$less_then_seven = [];
         $seven = [];
        
 foreach ($words as $i => $letters) {


     if (strlen(trim($letters)) < 7) {

         array_push($less_then_seven, $letters);
    
     }
     if  (strlen(trim($letters)) == 7) {

         array_push($seven, $letters);
        
     }
 	if (strlen(trim($letters)) > 7) {

         array_push($more_then_seven, $letters);
     }        
    
    
 }

$append_txt = "\r\n\r\nThis text has: ${count_letters} letters \r\n".count($less_then_seven)." less than seven letters\r\n".count($seven)." equal to seven letters\r\n".count($more_then_seven)." more than seven letters\r\n"."${count_words} words\r\n"."${count_sentences} count_sentences\r\n";

fwrite($handle, $append_txt);
fclose($handle);


?>