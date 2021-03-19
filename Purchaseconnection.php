<?php

    include 'Connect.php';

    $PurchaseId = $_POST["PurchaseId"];
    $Date = $_POST["Date"];
    $SupplierId = $_POST["SupplierId"];
    $Mode = $_POST["Mode"];
    $TotalAmount = $_POST["TotalAmount"];
    $PayAmount = $_POST["PayAmount"];
    $ItemName = $_POST["ItemName"];
    $BatchNo = $_POST["BatchNo"];
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"];
    $OutputGST = $_POST["OutputGST"];
    $Amount = $_POST["Amount"];
    $Discount = $_POST["Discount"];


    $sql = "INSERT INTO purchase(Purchase_ID,Date,Supplier_ID,Mode,Total_Amount,Pay_Amount)
    VALUES('$PurchaseId','$Date','$SupplierId','$Mode','$TotalAmount','$PayAmount')";
      if($con->query($sql)===TRUE){
        $sql = "INSERT INTO purchaseItem(Purchase_ID, Item_Name,Batch_No,Quantity,Rate,Output_GST,Amount,Discount) 
        VALUES('$PurchaseId','$ItemName','$BatchNo','$Quantity','$Rate','$OutputGST','$Amount','$Discount')";
    
        if($con->query($sql)===TRUE){
            echo "New record inserted successfully ";
        } else {
            echo $con->error;
        }
    } else {
        echo $con->error;
    }

    $con->close();
?>