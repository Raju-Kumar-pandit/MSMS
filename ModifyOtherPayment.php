<?php

    include 'Connect.php';

    $PaymentId = $_POST["PaymentId"];
    $Date = $_POST["Date"];
    $LedgerId = $_POST["LedgerId"];
    $Mode = $_POST["Mode"];
    $DuesAmount = $_POST["DuesAmount"];
    $PayAmount = $_POST["PayAmount"];
    $CurrentDuseAmount = $_POST["CurrentDuesAmount"];

    $sql = "UPDATE otherpayment SET Payment_ID='$PaymentId',ledger_ID='$LedgerId',Date='$Date',Mode='$Mode',Dues_Amount='$DuesAmount',Pay_Amount='$PayAmount',Current_Dues_Amount='$CurrentDuseAmount' WHERE ledger_ID='$LedgerId'";
    
    if($con->query($sql)===TRUE)
    {
        echo "<script>alert('Update Existing data successfully')</script>";
        echo "<script>window.location.href='EditOtherPayment.php'</script>";
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>



