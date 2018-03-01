<?php   
    #LOOPS - Execute code set number of times

    /* 
        For -loops
        While -loops
        Do..While -loops
        Foreach -loops
    */


    # For loop
    # @parametars - init ("inicializer"), condition, inc ("Increment")

    /*
    for($i = 0; $i < 10; $i++){
        echo "Number" ." ". $i;
        echo "<br/>";
    }
    */



    # While loop
    # @parametars - condition

    /*
    $i =0;

    while($i < 10){
        echo $i;
        echo "<br/>";
        $i++;
    }
    */


    # Do...While
    # @parametars - condition


    // $i=0;
    // do{
    //     echo $i;
    //     echo "<br>";
    //     $i++;
    // }

    // while($i < 10);


    $people = ["Brad" => "brad@gnmail.com","Jose" => "jose@gnmail.com","William" => "will@gnmail.com"];

    foreach($people as $person => $email){
        echo $person.": ".$email;;
        echo "<br/>";
    }

    
?>