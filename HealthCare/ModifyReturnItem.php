<?php

    include 'Connect.php';

    $ReturnId = $_POST["ReturnId"];
    $Date = $_POST["Date"];
    $SupplerId = $_POST["SupplierId"];
    $Mode = $_POST["Mode"];
    $TotalAmount = $_POST["TotalAmount"];
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


    $sql = "UPDATE  returnsitem SET Date='$Date',Supplier_ID='$SupplerId',Mode='$Mode',Total_Amount='$TotalAmount',Dues_Amount='$DuesAmount' WHERE Return_ID='$ReturnId'";
                                                                                                                
      if($con->query($sql)===TRUE){
        $sql = "UPDATE  returnitems SET Item_Name='$ItemName',Batch_No='$BatchNo',Quantity='$Quantity',Rate='$Rate',Amount='$Amount',Discount='$Discount',Actual_Amount='$ActualAmt',SGSTRate='$SGSTRate',SGSTAmount='$SGSTAmount',CGSTRate='$CGSTRate',CGSTAmount='$CGSTAmount' WHERE Return_ID='$ReturnId'"; 
                                                                                                                                                                                                                                 
    
        if($con->query($sql)===TRUE){
            echo"<script>alert('New data Update Successfully')</script>";
            echo "<script>window.location.href='EditReturnItem.php'</script>";
        } else {
            echo $con->error;
        }
    } else {
        echo $con->error;
    }

    $con->close();
?>