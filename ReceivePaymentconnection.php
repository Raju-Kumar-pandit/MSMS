<?php

    include 'Connect.php';

    $PaymentId = $_POST["PaymentId"];
    $Date = $_POST["Date"];
    $Id = $_POST["Id"];
    $Mode = $_POST["Mode"];
    $DuesAmount = $_POST["DuesAmount"];
    $PayAmount = $_POST["PayAmount"];
    $CurrentDuseAmount = $_POST["CurrentDuesAmount"];

    $sql = "INSERT INTO receivePayment(Payment_ID,ID,Date,Mode,Dues_Amount,Pay_Amount,Current_Dues_Amount) 
    VALUES('$PaymentId','$Id','$Date','$Mode','$DuesAmount','$PayAmount','$CurrentDuseAmount')";
    
    if($con->query($sql)===TRUE)
    {
        echo "New data inserted successfully";
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>



