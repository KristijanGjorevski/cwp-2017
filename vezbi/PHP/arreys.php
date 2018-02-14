<?php
    // Single line comment
    # Single line comment
    /*
        Multi-line comment
    */

    #Array - Variable that holds multiple values

    /*
    -Indexed
    -Associative
    -Multi-dimensional
    */


    //indexed

    $people = array('Kevin','Jeremy','Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda','Toyota','Форд'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

        // echo count($cars); == 5
        //print_r($cars);
        // var_dump($cars);
        // echo $cars[4];

    // Asociative arrays
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

        //echo $people['Brad'];
        //echo $ids [22];
        //$people["Jill"] = 42;
        //echo $people['Jill'];
        //print_r($people);
        //var_dump($people);


    // Multi-dimensional
    $cars = array(
        array("Honda", 20, 10),
        array("Toyota", 30, 20),
        array("Ford", 23, 12),
    );

    echo $cars[1][2];
?>