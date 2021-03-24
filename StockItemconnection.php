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
    $Amout = $_POST["Amount"];

    $sql = "INSERT INTO stockItem(Date, Item_ID, Item_Name, Unit, Under, Quantity, Rate, Amount)
     VALUES ('$Date','$ItemId','$ItemName','$Under','$Unit','$Quantity','$Rate','$Amout')";
   

    if($con->query($sql)===TRUE)
    {
        $sql = "INSERT INTO composition(Composition) VALUES ('$Composition')";
        if($con->query($sql)===TRUE)
        {
            echo "New data inserted successfully";
        }
        else
        {
            echo "New data inserted successfully";
         }
    }
    else
    {
        
        echo $con->error;
    }

    $con->close();
?>


