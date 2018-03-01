<?php 
    // Check for posted data
    // if(filter_has_var(INPUT_POST,"data")){
    //     echo " Data found";
    // }else{
    //     echo "No data";
    // }
    // if (isset($_POST["data"])) {

    //     if (filter_input(INPUT_POST, $_POST["data"], FILTER_VALIDATE_EMAIL)){
    //         echo "Email is valid";
    //     }else{
    //         echo "Email is invalid";
    //     }

    // }    
    
    // nacin1
    // if(filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)) {
    //     echo 'vo red'; 
    // } elseif(filter_has_var(INPUT_POST,'data')){
    //         echo 'vnesete pravilen format';
    // } else {
    //         echo  'vnesete email';
    // }
    

    // // nacin2
    // if(isset($_POST['data'])){
    //     if(filter_var($_POST['data'], FILTER_VALIDATE_EMAIL)){
    //         echo 'vo red'; 
    //     } else {
    //         echo 'vnesete pravilen format';
    //     }
        
    // } else { 
    //     echo  'vnesete email';
    // }

    // echo count('vnesete email') ; echo sizeof('vnesete email');
    // strlen('vnesete email');

    // $filters = [
    //     "data" => FILTER_VALIDATE_EMAIL,
    //     "data2" => [
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => [
    //             "min_range" => 1,
    //             "max_range" => 100
    //         ]
    //     ]
    // ];

  //  echo '<pre>'; print_r(filter_input_array(INPUT_POST,$filters)); echo '</pre>';
    
    $arr = [
        "name" => "Kiko",
        "age" => 25,
        "email" => "kikogjorevski@gmail.com"
    ];

    $filters = [
        "name" => [
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ],
        "age" => [
            "filter" => FILTER_VALIDATE_INT,
            "options" => [
                "min_range" => 1,
                "max_range" => 120
            ]
            ],
        "email" => FILTER_VALIDATE_EMAIL

    ];

    echo '<pre>'; print_r(filter_var_array($arr,$filters)); echo '</pre>';
    
?>

<form method="POST">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>

</form>