<?php 

 // create curl resource 
 $c_c = curl_init(); 

 $url = "http://www.google.com";
 // set url 
 curl_setopt($c_c, CURLOPT_URL,$url ); 
 //return the transfer as a string 
 curl_setopt($c_c, CURLOPT_RETURNTRANSFER, 1); 
 // $output contains the output string 

 curl_setopt($c_c, CURLOPT_HEADER, 0);
 $output = curl_exec($c_c); 
 // close curl resource to free up system resources 
 curl_close($c_c);

 echo $output;

?>




























