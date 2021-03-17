<?php
    include 'Connect.php';
 
    $SupplierID = $_POST["SupplierId"];
    $Date = $_POST["Date"];
    $SupplierName = $_POST["SupplierName"];
    $ShopName = $_POST["ShopName"];
    $MobileNo = $_POST["MobileNo"];
    $EmilId = $_POST["EmailId"];
    $PlaceName = $_POST["PlaceName"];
    $StateName = $_POST["StateName"];
    $CityName = $_POST["CityName"];

    $sql = "INSERT INTO supplier(Supplier_ID,Date,Supplier_Name,Shop_Name,Mobile_No,Email_ID,Place_Name,State_Name,City_Name) 
    VALUES('$SupplierID','$Date','$SupplierName','$ShopName','$MobileNo','$EmilId','$PlaceName','$StateName','$CityName')";
     
    if($con->query($sql)===TRUE){
        echo"New Data Inserted Successfully";
    } else {
        echo $con->error;
    }

    $con->close();