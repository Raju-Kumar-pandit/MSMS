<?php

    include 'Connect.php';

    $CompanyId = $_POST["CompanyId"];
    $CompanyName = $_POST["CompanyName"];
    $Date = $_POST["Date"];
    $MobileNo = $_POST["MobileNo"];
    $EmailId = $_POST["EmailId"];
    $PlaceName =$_POST["PlaceName"];
    $State = $_POST["StateName"];
    $City = $_POST["CityName"];
    $PinCode = $_POST["PinCode"];

    $sql = " INSERT INTO companyinfo(Company_ID,Company_Name,Date,Mobile_No,Email_ID,Place_Name,State_Name,City_Name,Pin_Code)
    VALUES ('$CompanyId','$CompanyName','$Date','$MobileNo','$EmailId','$PlaceName','$State','$City','$PinCode')";
    
    if($con->query($sql)===TRUE){
        echo "<script>window.location.href='Dashboard.php'</script>";
    }else{
        echo $con->error;
    }


$con->close();
