<?php

    include 'Connect.php';

    $CustomerId = $_POST["CustomerId"];
    $Date = $_POST["Date"];
    $PatientName = $_POST["PatientName"];
    $PatientAge = $_POST["PatientAge"];
    $Gender = $_POST["Gender"];
    $CustomerName = $_POST["CustomerName"];
    $MobileNo = $_POST["MobileNo"];
    $VillageName = $_POST["VillageName"];
    $StateName = $_POST["StateName"];
    $CityName = $_POST["CityName"];

    $sql = "UPDATE  customer SET Patient_Name='$PatientName', Patient_Age='$PatientAge', Customer_Name='$CustomerName', Date='$Date', Gender='$Gender', Mobile_No='$MobileNo', Village_Name='$VillageName', State_Name='$StateName', City_Name='$CityName' WHERE Customer_ID='C00001'";

    if($con->query($sql)===TRUE){
        echo"<script>alert('Update existing data Successfully')</script>";
        echo "<script>window.location.href='Dashbord.php'</script>";
    } else {
        echo $con->error;
    }

    $con->close();

?>