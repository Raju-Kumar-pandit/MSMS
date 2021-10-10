<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $ItemId = $_GET["id"];
        echo "<script>alert($ItemId')</script>";
        $sql = "DELETE FROM stockItem WHERE Item_ID='$ItemId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='StockRecord.php'</script>";
?>