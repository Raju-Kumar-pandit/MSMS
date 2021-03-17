<?php
    include 'Connect.php';

    $ReturnId = $_POST["ReturnId"];
    $Date = $_POST["Date"];
    $SupplierId = $_POST["SupplierId"];
    $Mode = $_POST["Mode"];
    $ItemName = $_POST["ItemName"];
    $BatchNo = $_POST["BatchNo"];
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"];
    $InputGST = $_POST["InputGST"];
    $Discount = $_POST["Discount"];
    $Amount = $_POST["Amount"];
    $TotalAmount = $_POST["TotalAmount"];
    $DuesAmount = $_POST["DuesAmount"];
    $CurrentDues =$_POST["CurrentDuesAmount"]

    $sql = "INSERT INTO returnsItem(Return_ID,Date,Supplier_ID,Mode,Total_Amount,Dues_Amount,Current_Dues_Amount) 
    VALUES('$ReturnId','$Date','$SupplierId','$TotalAmount','$DuesAmount','$CurrentDues')";

    $sql = "INSERT INTO returnItems(Item_Name,Batch_No,Quantity,Rate,Input_GST,Discount,Amount) 
    VALUES('$ItemName','$BatchNo','$Quantity','$Rate','$InputGST','$Discount','$Amount')";
    
    if($con->multi_query($sql)===TRUE)
    {
        echo "New data inserted successfully";
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>