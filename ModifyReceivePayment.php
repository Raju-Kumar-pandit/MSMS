<?php

    include 'Connect.php';

    $PaymentId = $_POST["PaymentId"];
    $Date = $_POST["Date"];
    $CustomerId = $_POST["CustomerId"];
    $Mode = $_POST["Mode"];
    $DuesAmount = $_POST["DuesAmount"];
    $PayAmount = $_POST["PayAmount"];
    $CurrentDuseAmount = $_POST["CurrentDuesAmount"];

    $sql = "UPDATE receivePayment SET Payment_ID='$PaymentId',Customer_ID='$CustomerId',Date='$Date',Mode='$Mode',Dues_Amount='$DuesAmount',Pay_Amount='$PayAmount',Current_Dues_Amount='$CurrentDuseAmount' WHERE Customer_ID='$CustomerId'";
    
    if($con->query($sql)===TRUE)
    {
        echo "<script>alert('New data inserted successfully')</script>";
        echo "<script>window.location.href='EditReceivePayment.php'</script>";
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>



