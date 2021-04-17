<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $CustomerId = $_GET["id"];
        echo "<script>alert('$CustomerId')</script>";
        $sql = "DELETE FROM customer WHERE Customer_ID='$CustomerId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='CustomerRecord.php'</script>";
?>