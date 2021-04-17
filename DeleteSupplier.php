<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $SupplierId = $_GET["id"];
        echo "<script>alert('$SupplierId')</script>";
        $sql = "DELETE FROM supplier WHERE Supplier_ID='$SupplierId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='SupplierRecord.php'</script>";
?>