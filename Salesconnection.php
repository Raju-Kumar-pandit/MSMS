<?php

    include 'Connect.php';

    $SalesI = $_POST["SalesId"];
    $Date = $_POST["Date"];
    $CustomerId = $_POST["CustomerId"];
    $Mode = $_POST["Mode"];
    $TotalAmount = $_POST["TotalAmount"];
    $PayAmount = $_POST["PayAmount"];
    $DuesAmount = $_POST["DuesAmount"];
    $ItemName = $_POST["ItemName"];
    $BatchNo = $_POST["BatchNo"];
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"];
    $InputGSt = $_POST["InputGST"];
    $Amount = $_POST["Amount"];
    $Discount = $_POST["Discount"];

    $sql = "INSERT INTO sales(Sales_ID,Date,Customer_Id,Mode,Total_Amount,Pay_Amount,Dues_Amount)
    VALUES('$SalesI','$Date','$CustomerId','$Mode','$TotalAmount','$PayAmount','$DuesAmount')";

    

    if($con->multi_query($sql)===TRUE){

        $sql = "INSERT INTO salesItem(Item_Name,Batch_No,Quantity,Rate,Input_GST,Discount,Amount) 
        VALUES('$ItemName','$BatchNo','$Quantity','$Rate','$InputGSt','$Discount','$Amount')";

        if($con->multi_query($sql)===TRUE){

            echo "New record inserted successfully ";

        } else {

            echo $con->error;

        }
        
    } else {

        echo "New record inserted successfully ";
        
    }
    $con->close();
?>