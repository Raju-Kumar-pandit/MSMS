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
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"];
    $ActualAmt = $_POST["ActualAmt"];
    $SGSTRate = $_POST["SGSTP"];
    $SGSTAmount = $_POST["SGST"];
    $CGSTRate = $_POST["CGSTP"];
    $CGSTAmount = $_POST["CGST"];
    $Amount = $_POST["Amount"];
    $Discount = $_POST["Discount"];


    $sql = "UPDATE  sales SET Date='$Date',Customer_ID='$CustomerId',Mode='$Mode',Total_Amount='$TotalAmount',Pay_Amount='$PayAmount',Dues_Amount='$DuesAmount' WHERE Sales_ID='$SalesId'";
                                                                                                                
      if($con->query($sql)===TRUE){
        $sql = "UPDATE  salesItem SET Item_Name='$ItemName',Batch_No='$BatchNo',Quantity='$Quantity',Rate='$Rate',Amount='$Amount',Discount='$Discount',Actual_Amount='$ActualAmt',SGSTRate='$SGSTRate',SGSTAmount='$SGSTAmount',CGSTRate='$CGSTRate',CGSTAmount='$CGSTAmount' WHERE Sales_ID='$SalesId'"; 
                                                                                                                                                                                                                                 
    
        if($con->query($sql)===TRUE){
            echo"<script>alert('New data Update Successfully')</script>";
            echo "<script>window.location.href='EditSales.php'</script>";
        } else {
            echo $con->error;
        }
    } else {
        echo $con->error;
    }

    $con->close();
?>