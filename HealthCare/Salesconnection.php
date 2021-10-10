<?php

    include 'Connect.php';

    $SalesId = $_POST["SalesId"];
    $Date = $_POST["Date"];
    $CustomerId = $_POST["CustomerId"];
    $Mode = $_POST["Mode"];
    $TotalAmount = $_POST["TotalAmount"];
    $PayAmount = $_POST["PayAmount"];
    $DuesAmount = $_POST["DuesAmount"];
    $ItemName = $_POST["ItemName"];
    $BatchNo = $_POST["BatchNo"];
    $Expiry = $_POST["Expirydate"];
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"];
    $ActualAmt = $_POST["ActualAmt"];
    $SGSTRate = $_POST["SGSTP"];
    $SGSTAmount = $_POST["SGST"];
    $CGSTRate = $_POST["CGSTP"];
    $CGSTAmount = $_POST["CGST"];
    $Amount = $_POST["Amount"];
    $Discount = $_POST["Discount"];

    $sql = "INSERT INTO sales(Sales_ID,Date,Customer_Id,Mode,Total_Amount,Pay_Amount,Dues_Amount)
    VALUES('$SalesId','$Date','$CustomerId','$Mode','$TotalAmount','$PayAmount','$DuesAmount')";

    if($con->query($sql)===TRUE){
        foreach($ItemName as $key =>$value){
            $sql = "INSERT INTO salesItem(Sales_ID,Item_Name,Batch_No,Quantity,Rate,Discount,Actual_Amount,Amount,SGSTRate,SGSTAmount,CGSTRate,CGSTAmount,Expiry_Date) 
            VALUES('$SalesId','$ItemName[$key]','$BatchNo[$key]','$Quantity[$key]','$Rate[$key]','$Discount[$key]','$ActualAmt[$key]','$Amount[$key]','$SGSTRate[$key]','$SGSTAmount[$key]','$CGSTRate[$key]','$CGSTAmount[$key]','$Expiry[$key]')";

            if($con->query($sql)===TRUE){
                echo"<script>alert('New data inserted Successfully')</script>";
                echo "<script>window.location.href='Sales.php'</script>";
            } else {
                echo $con->error;
            }
        }
    } else {

        echo $con->error;
        
    }
    $con->close();
?>