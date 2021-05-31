<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $PaymentId = $_GET["id"];
        echo "<script>alert('$PaymentId')</script>";
        $sql = "DELETE FROM otherpayment WHERE Payment_ID='$PaymentId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='OtherPaymentRecord.php'</script>";
?>