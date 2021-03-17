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

    $sql = "INSERT INTO purchaseItem(Item_Name,Batch_No,Quantity,Rate,Output_GST,Amount,Discount) 
    VALUES('$ItemName','$BatchNo','$Quantity','$Rate','$OutputGST','$Amount','$Discount')";

    if($con->multi_query($sql)===TRUE){
        echo "New record inserted successfully ";
    } else {
        echo $con->error;
    }
    $con->close();
?>