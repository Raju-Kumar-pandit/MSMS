<?php
    include 'Connect.php';

    $SupplierID = $_POST["SupplierId"];
    $Date = $_POST["Date"];
    $SupplierName = $_POST["SupplierName"];
    $ShopName = $_POST["ShopName"];
    $MobileNo = $_POST["MobileNo"];
    $EmailId = $_POST["EmailId"];
    $PlaceName = $_POST["PlaceName"];
    $StateName = $_POST["StateName"];
    $CityName = $_POST["CityName"];

    $sql = "UPDATE  supplier SET Supplier_Name='$SupplierName', Date='$Date', Shop_Name='$ShopName', Mobile_No='$MobileNo', Email_ID='$EmailId', Place_Name='$PlaceName', State_Name='$StateName', City_Name='$CityName' WHERE Supplier_ID='S00001'";

    if($con->query($sql)===TRUE){
        echo"<script>alert('Update existing data Successfully')</script>";
        echo "<script>window.location.href='Dashbord.php'</script>";
    } else {
        echo $con->error;
    }

    $con->close();
?>