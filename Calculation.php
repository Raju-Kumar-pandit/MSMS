<?php 
    include 'Connect.php';
    $BatchNo = $_POST["Batch"];
    $Mfdate = $_POST["Mfgdate"];
    $Exdate = $_POST["Expirydate"];
    $Quantity = $_POST["Quantities"];
    $Rate = $_POST["Rates"];
    $per = $_POST["Pers"];
    $Amount = $_POST["Amounts"];
    
    $sql =" INSERT INTO calculation(Batch_NO,Mfg_Date,Expiry_Date,Quantity,Rate,Per,Amount)
    VALUES('$BatchNo','$Mfdate','$Exdate','$Quantity','$Rate','$per','$Amount')";

    if($con->query($sql)===TRUE){
        echo "<script>alert('Data insert Successfully');</script>";
        echo "<script>window.location.href='StockItem.php'</script>";
    } else {
        echo $con->error;
    }
?>