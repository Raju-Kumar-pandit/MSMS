<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $PaymentId = $_GET["id"];
        echo "<script>alert('$PaymentId')</script>";
        $sql = "DELETE FROM receivepayment WHERE Payment_ID='$PaymentId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='ReceivePaymentRecord.php'</script>";
?>