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


    $sql = "UPDATE  purchase SET Date='$Date',Supplier_ID='$SupplierId',Mode='$Mode',Total_Amount='$TotalAmount',Pay_Amount='$PayAmount',Dues_Amount='$DuesAmount' WHERE Purchase_ID='$PurchaseId'";
                                                                                                                
      if($con->query($sql)===TRUE){
        $sql = "UPDATE  purchaseItem SET Item_Name='$ItemName',Batch_No='$BatchNo',Quantity='$Quantity',Rate='$Rate',Amount='$Amount',Discount='$Discount',Actual_Amount='$ActualAmt',SGSTRate='$SGSTRate',SGSTAmount='$SGSTAmount',CGSTRate='$CGSTRate',CGSTAmount='$CGSTAmount' WHERE Purchase_ID='$PurchaseId'"; 
                                                                                                                                                                                                                                 
    
        if($con->query($sql)===TRUE){
            echo"<script>alert('New data Update Successfully')</script>";
            echo "<script>window.location.href='EditPurchase.php'</script>";
        } else {
            echo $con->error;
        }
    } else {
        echo $con->error;
    }

    $con->close();
?>