<?php
    include 'Connect.php';
 
    $StaffId = $_POST["StaffId"];
    $StaffName = $_POST["StaffName"];
    $Date = $_POST["Date"];
    $Dateofbirth = $_POST["Dateofbirth"];
    $Gender = $_POST["Gender"];
    $MobileNo = $_POST["MobileNo"];
    $EmailId = $_POST["EmailId"];
    $VillageName = $_POST["VillageName"];
    $StateName = $_POST["StateName"];
    $CityName = $_POST["CityName"];

    $sql = "INSERT INTO staff(Staff_ID,Date,Staff_Name,DOB,Gender,Mobile_No,Email_ID,Village_Name,State_Name,City_Name) 
    VALUES('$StaffId','$Date','$StaffName','$Dateofbirth','$Gender','$MobileNo','$EmailId','$VillageName','$StateName','$CityName')";
     
    if($con->query($sql)===TRUE){
        echo"New Data Inserted Successfully";
    } else {
        echo $con->error;
    }

    $con->close();