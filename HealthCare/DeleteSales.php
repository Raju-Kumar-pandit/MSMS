<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $SalesId = $_GET["id"];
        echo "<script>alert('$SalesId')</script>";
        $sql = "DELETE FROM sales WHERE Sales_ID='$SalesId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='SalesRecord.php'</script>";
?>