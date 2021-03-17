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

$sql = " INSERT INTO customer(Customer_ID,Date,Patient_Name,Patient_Age,Gender,Customer_Name,Mobile_No,Village_Name,State_Name,City_Name) 
VALUES ('$CustomerId','$Date','$PatientName','$PatientAge','$Gender','$CustomerName','$MobileNo','$VillageName','$StateName','$CityName')";

if($con->query($sql)===TRUE)
{
    echo"New Data Inserted Successfully";
}  else {
    echo $con->error;
}
?>