<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure');</script>";
    $PurchaseId = $_GET['id'];
    echo "<script>alert('$PurchaseId');</script>";
    $sql = "DELETE FROM purchase WHERE Purchase_ID='$PurchaseId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='PurchaseRecords.php'</script>";
?>