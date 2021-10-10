<?php

    include 'Connect.php';

    $PaymentId = $_POST["PaymentId"];
    $Date = $_POST["Date"];
    $SupplierId = $_POST["SupplierId"];
    $Mode = $_POST["Mode"];
    $DuesAmount = $_POST["DuesAmount"];
    $PayAmount = $_POST["PayAmount"];
    $CurrentDuseAmount = $_POST["CurrentDuesAmount"];

    $sql = "INSERT INTO payment(Payment_ID,Supplier_ID,Date,Mode,Dues_Amount,Pay_Amount,Current_Dues_Amount) 
    VALUES('$PaymentId','$SupplierId','$Date','$Mode','$DuesAmount','$PayAmount','$CurrentDuseAmount')";
    
    if($con->query($sql)===TRUE)
    {
        echo "<script>alert('New data inserted successfully')</script>";
        echo "<script>window.location.href='Payment.php'</script>";
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>



