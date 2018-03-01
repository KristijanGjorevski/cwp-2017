<?php 

    $path = "/dir0/dir/myfile.php";
    $file = "file1.txt";

    // //Return filename
     //echo basename($path);

    // //Return filename without extention
    // echo basename($path,".php");

    // //Return the dir name from path
    // echo dirname($path);

    // // Check if file exists
     //echo file_exists($file);

    // // Get absolute path
     //echo realpath($file);

    // // Check to see if file is writable
    // echo is_writable($file);

    // // Check to see if file is readable
    // echo is_readable($file);

    // //Get file size
    // echo filesize($file);

    // //create a directory -- pravi folder
    // mkdir("testing");

    // // Remove directory if empty
    // rmdir("testing");

    // // Copy file
    // echo copy("file1.txt", "file2.txt");

    // // Rename file
    // rename("file2.txt", "myfile.txt");

    // // Delete File
    // unlink("myfile.txt");

    // // Write from file to string -- cel fajl
    // echo file_get_contents($file);

    // // Write sting to file
    // echo file_put_contents($file, "Goodbye world");

    // // Get it FIRST , append it , get it BACK

    // $current = file_get_contents($file);

    // $current .= " Appending";

    // file_put_contents($file,$current);

    // // Open file for reading - dva parametri: Fajlot sto sakame da se otvori , sto da pravime so istiot (predefinirani funkcii po bukvi)

    //  $handle = fopen($file, "r");
    //  $data = fread($handle,filesize($file));
    //  echo $data;
    //  fclose($handle);

    // // open file for writing -
    
    //  $handle = fopen("file2.txt","w");
    //  $txt = "pisuvame\n";
    //  fwrite($handle,$txt);
    //  $txt = "Steve Smith\n";
    //  fwrite($handle,$txt);
    //  fclose($handle);

?>