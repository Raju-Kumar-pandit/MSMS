<?php

    include 'Connect.php';

    $PurchaseId = $_POST["PurchaseId"];
    $Date = $_POST["Date"];
    $SupplierId = $_POST["SupplierId"];
    $Mode = $_POST["Mode"];
    $TotalAmount = $_POST["TotalAmount"];
    $PayAmount = $_POST["PayAmount"];
    $DuesAmount = $_POST["DuesAmount"];
    $ItemName = $_POST["ItemName"];
    $BatchNo = $_POST["BatchNo"];
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"];
    $ActualAmt = $_POST["ActualAmt"];
    $SGSTRate = $_POST["SGSTP"];
    $SGSTAmount = $_POST["SGST"];
    $CGSTRate = $_POST["CGSTP"];
    $CGSTAmount = $_POST["CGST"];
    $Amount = $_POST["Amount"];
    $Discount = $_POST["Discount"];
    $Expiry = $_POST["Expirydate"];

    $sql = "INSERT INTO purchase(Purchase_ID,Date,Supplier_ID,Mode,Total_Amount,Pay_Amount,Dues_Amount)
    VALUES('$PurchaseId','$Date','$SupplierId','$Mode','$TotalAmount','$PayAmount','$DuesAmount')";
      if($con->query($sql)===TRUE){
        $sql = "INSERT INTO purchaseItem(Purchase_ID, Item_Name,Batch_No,Quantity,Rate,Amount,Discount,Actual_Amount,SGSTRate,SGSTAmount,CGSTRate,CGSTAmount,Expiry_Date) 
        VALUES('$PurchaseId','$ItemName','$BatchNo','$Quantity','$Rate','$Amount','$Discount','$ActualAmt','$SGSTRate','$SGSTAmount','$CGSTRate','$CGSTAmount','$Expiry')";
    
        if($con->query($sql)===TRUE){
            echo"<script>alert('New data inserted Successfully')</script>";
            echo "<script>window.location.href='Purchase.php'</script>";
        } else {
            echo $con->error;
        }
    } else {
        echo $con->error;
    }

    $con->close();
?>