<?php
    include 'Connect.php';
    $SymbolName = $_POST["Name"];
    $UnitName = $_POST["UnitName"];

    $sql = "INSERT INTO unit(UnitName,Symbol_Name) VALUES('$SymbolName','$UnitName')";

    if($con->query($sql)===TRUE){
        echo "<script>alert('Data insert Successfully');</script>";
        echo "<script>window.location.href='StockItem.php'</script>";
    } else {
        echo $con->error;
    }
?>