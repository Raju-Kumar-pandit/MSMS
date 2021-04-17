<?php

    include 'Connect.php';

    $PaymentId = $_POST["PaymentId"];
    $Date = $_POST["Date"];
    $SupplierId = $_POST["SupplierId"];
    $Mode = $_POST["Mode"];
    $DuesAmount = $_POST["DuesAmount"];
    $PayAmount = $_POST["PayAmount"];
    $CurrentDuseAmount = $_POST["CurrentDuesAmount"];

    $sql = "UPDATE payment SET Payment_ID='$PaymentId',Supplier_ID='$SupplierId',Date='$Date',Mode='$Mode',Dues_Amount='$DuesAmount',Pay_Amount='$PayAmount',Current_Dues_Amount='$CurrentDuseAmount' WHERE Supplier_ID='$SupplierId'";
    
    if($con->query($sql)===TRUE)
    {
        echo "<script>alert('Update Existing data successfully')</script>";
        echo "<script>window.location.href='EditPayment.php'</script>";
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>



