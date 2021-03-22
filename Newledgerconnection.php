<?php

    include 'Connect.php';

    $LedgerId = $_POST["LedgerId"];
    $Name = $_POST["Name"];
    $Under = $_POST["Under"];
    $StateName = $_POST["StateName"];
    $CityName = $_POST["CityName"];

    $sql =  "INSERT INTO underGroup (Ledger_ID, Name, Under, State_Name, City_Name)
    VALUES ('$LedgerId', '$Name', '$Under', '$StateName', '$CityName')";
    
    if($con->query($sql)===TRUE){
        echo "New data inserted successfully";
    } else {
        echo $con->error;
    }
?>