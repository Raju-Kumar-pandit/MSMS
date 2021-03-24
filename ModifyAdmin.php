<?php
    include 'Connect.php';
 
    $AdminId = $_POST["AdminId"];
    $AdminName  = $_POST["AdminName"];
    $Date  = $_POST["Date"];
    $DOB  = $_POST["Dateofbirth"];
    $Gender  = $_POST["Gender"];
    $MobileNo  = $_POST["MobileNo"];
    $EmailId  = $_POST["EmailId"];
    $VillageName  = $_POST["VillageName"];
    $StateName  = $_POST["StateName"];
    $CityName  = $_POST["CityName"];

    $sql = "UPDATE  Admin SET Admin_Name='$AdminName', Date='$Date', DOB='$DOB', Gender='$Gender', Mobile_No='$MobileNo', Email_ID='$EmailId', Village_Name='$VillageName', State_Name='$StateName', City_Name='$CityName' WHERE Admin_ID='$AdminId'";

    if($con->query($sql)===TRUE){
        echo"<script>alert('Update Existing data successfully')</script>";
        echo "<script>window.location.href='Dashbord.php'</script>";
    } else {
        echo $con->error;
    }

    $con->close();