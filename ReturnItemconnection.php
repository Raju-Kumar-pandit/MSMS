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
    $Discount = $_POST["Discount"];
    $ActualAmt = $_POST["ActualAmt"];
    $SGSTP  = $_POST["SGSTP"];
    $SGST  = $_POST["SGST"];
    $CGSTP  = $_POST["CGSTP"];
    $CGST  = $_POST["CGST"];
    $Amount = $_POST["Amount"];
    $TotalAmount = $_POST["TotalAmount"];
    $DuesAmount = $_POST["DuesAmount"];
    $Expiry = $_POST["Expirydate"];

    $sql = "INSERT INTO returnsItem(Return_ID,Date,Supplier_ID,Mode,Total_Amount,Dues_Amount) 
    VALUES('$ReturnId','$Date','$SupplierId','$Mode','$TotalAmount','$DuesAmount')";

    
    
    if($con->query($sql)===TRUE)
    {
        $sql = "INSERT INTO returnItems(Return_ID,Item_Name,Batch_No,Quantity,Rate,Discount,Amount,Actual_Amount,SGSTRate,SGSTAmount,CGSTRate,CGSTAmount,Expiry_Date) 
            VALUES('$ReturnId','$ItemName','$BatchNo','$Quantity','$Rate','$Discount','$Amount','$ActualAmt','$SGSTP','$SGST','$CGSTP','$CGST','$Expiry')";
        if($con->query($sql)===TRUE){
            echo "<script>alert('New data inserted successfully')</script>";
            echo "<script>window.location.href='ReturnItem.php'</script>";
        } else {
            
            echo $con->error;
        }
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>