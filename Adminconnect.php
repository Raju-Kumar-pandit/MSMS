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
    
    $sql = "INSERT INTO admin(Admin_ID,Admin_Name,Date,DOB,Gender,Mobile_No,Email_ID,Village_Name,State_Name,City_Name)
    VALUES('$AdminId','$AdminName','$Date','$DOB','$Gender','$MobileNo','$EmailId','$VillageName','$StateName','$CityName')";
    
    if($con->query($sql)===TRUE){
        echo"<script>alert('New Data Inserted Successfully')</script>";
        echo "<script>window.location.href='Admin.php'</script>";
    }else{
        echo $con->error;
    }

    $con->close(); 
?>