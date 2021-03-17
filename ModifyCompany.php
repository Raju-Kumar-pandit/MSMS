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


    $sql = "UPDATE  companyinfo SET Company_Name='$CompanyName', Date='$Date',Email_ID='$EmailId', Place_Name='$PlaceName', State_Name='$State', City_Name='$City', Pin_Code='$PinCode', Mobile_No='$MobileNo' WHERE Company_ID='$CompanyId'";

    if($con->query($sql)===TRUE){
        echo "Update Existing data successfully";
    } else {
        echo $con->error;
    }
    $con->close();
?>