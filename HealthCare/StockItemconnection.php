<?php

    include 'Connect.php';

    $Date = $_POST["Date"];
    $ItemId = $_POST["ItemId"];
    $ItemName = $_POST["ItemName"];
    $Unit = $_POST["Unit"];
    $Under = $_POST["Under"];
    $Composition =$_POST["Composition"];
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"];
    $Amount = $_POST["Amount"];
    $GSTRate = $_POST["GSTRate"];
    $SaleRate = $_POST["SaleRate"];
    
    $Mfgdate = $_POST["Mfgdate"];
    $Expirydate = $_POST["Expirydate"];

    $sql = "INSERT INTO stockItem(Date, Item_ID, Item_Name, Unit, Under, Quantity, Rate, Amount, GST_Rate, Sale_Rate, Mfg_Date, Expiry_Date)
     VALUES ('$Date','$ItemId','$ItemName','$Unit','$Under','$Quantity','$Rate','$Amount','$GSTRate','$SaleRate','$Mfgdate','$Expirydate')";
   

    if($con->query($sql)===TRUE)
    {
        $sql = "INSERT INTO composition(Composition) VALUES ('$Composition')";
        if($con->query($sql)===TRUE)
        {
            echo"<script>alert('New data inserted Successfully')</script>";
            echo "<script>window.location.href='StockItem.php'</script>";
        }
    }
    else
    {
        
        echo $con->error;
    }

    $con->close();
?>


