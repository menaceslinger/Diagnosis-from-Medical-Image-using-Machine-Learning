<?php
    include_once 'connect.php';
    $pred = json_decode($_POST['pred'], true); 
    //print_r($pred);

    for ($i = 0; $i < 3; $i++) {
        $name = $pred[$i]['key'];
        $prob = $pred[$i]['value'];

        $sql = "INSERT INTO diagnosis(NAME, PROBABILITY) VALUES('$name', '$prob')";
        mysqli_query($conn, $sql);
    }

    // $name0 = $pred['0']['key'];
    // $prob0 = $pred['1']['value'];

    // $sql = "INSERT INTO diagnosis(NAME, PROBABILITY) VALUES('$name0', '$prob0')";
    
    
    
    
    //echo $name;
    //echo $prob;
    // $sql = "INSERT INTO diagnosis(NAME, PROBABILITY) VALUES('$name', '$addr')";
    // mysqli_query($conn, $sql);
?>