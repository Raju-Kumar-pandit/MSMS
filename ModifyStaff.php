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

    $sql = "UPDATE  staff SET Staff_Name='$StaffName', Date='$Date', DOB='$Dateofbirth', Gender='$Gender', Mobile_No='$MobileNo', Email_ID='$EmailId', Village_Name='$VillageName', State_Name='$StateName', City_Name='$CityName' WHERE Staff_ID='$StaffId'";

    if($con->query($sql)===TRUE){
        echo"Update Existing data successfully";
    } else {
        echo $con->error;
    }

    $con->close();
?>