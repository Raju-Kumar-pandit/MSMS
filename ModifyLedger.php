<?php
    include 'Connect.php';

    $LedgerId = $_POST["LedgerId"];
    $Name = $_POST["Name"];
    $Under = $_POST["Under"];
    $OpenAmount = $_POST["OpenAmount"];

    $sql = "UPDATE ledger SET Name='$Name', Under='$Under', Opening_Amount='$OpenAmount' WHERE Ledger_ID='$LedgerId'";

    if($con->query($sql)===TRUE){
        echo"<script>alert('Update Existing data successfully')</script>";
        echo "<script>window.location.href='Dashbord.php'</script>";
    } else {
        echo $con->error;
    }

    $con->close();
?>