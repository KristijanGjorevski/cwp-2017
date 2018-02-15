
<table border="1">
    <tr>
        <th></th>
    <?php 

         foreach ($_POST as $key => $value) {
           echo "<th>$key</th>";         
         }
         ?>
         </tr>


<?php

        $max_prosek = max($_POST["prosek"]);
        $min_prosek = min($_POST["prosek"]);

        $prosek_max_key = array_search($max_prosek, $_POST['prosek']);
        $prosek_min_key = array_search($min_prosek, $_POST['prosek']);



        $prosek_max_multiple = array_keys($_POST["prosek"],$max_prosek);
        $prosek_min_multiple = array_keys($_POST["prosek"],$min_prosek);     
  ?>      

    
    <?php 
    if ($prosek_max_multiple == true){ 
        foreach($prosek_max_multiple as $multiple_key_numbers){ ?>
            <tr>
                <th>Najvisok prosek</th>
                <td><?= $_POST["ime"][$multiple_key_numbers]; ?></td>  
                <td><?= $_POST["prezime"][$multiple_key_numbers]; ?></td>  
                <td><?= $max_prosek ?> </td>
            </tr>
    <?php   }
    } else { ?>
    <tr>
        <th>Najvisok prosek</th>
        <td><?= $_POST["ime"][$prosek_max_key]; ?></td>  
        <td><?= $_POST["prezime"][$prosek_max_key]; ?></td>  
        <td><?= $max_prosek ?> </td>  
    </tr>
    <?php } ?>

    <?php
    if ($prosek_min_multiple == true){ 
        foreach($prosek_min_multiple as $multiple_key_numbers){ ?>
            <tr>
                <th>Najnizok prosek</th>
                <td><?= $_POST["ime"][$multiple_key_numbers]; ?></td>  
                <td><?= $_POST["prezime"][$multiple_key_numbers]; ?></td>  
                <td><?= $min_prosek ?> </td>
            </tr>
    <?php   }
    } else { ?>
    <tr>
        <th>Najnizok prosek</th>
        <td><?= $_POST["ime"][$prosek_min_key]; ?></td>  
        <td><?= $_POST["prezime"][$prosek_min_key]; ?></td>  
        <td><?= $min_prosek ?> </td>  
    </tr>
    <?php } ?>

    

</table>

    