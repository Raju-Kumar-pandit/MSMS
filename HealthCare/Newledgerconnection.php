<?php

    include 'Connect.php';

    $LedgerId = $_POST["LedgerId"];
    $Name = $_POST["Name"];
    $Under = $_POST["Under"];
    $OpenAmount = $_POST["OpenAmount"];

    $sql =  "INSERT INTO ledger (Ledger_ID, Name, Under, Opening_Amount)
    VALUES ('$LedgerId', '$Name', '$Under', '$OpenAmount')";
    
    if($con->query($sql)===TRUE){
        echo"<script>alert('New Data Inserted Successfully')</script>";
        echo "<script>window.location.href='NewLedger.php'</script>";
    } else {
        echo $con->error;
    }
?>