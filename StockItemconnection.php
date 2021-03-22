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

    $sql = "INSERT INTO stockItem(Date, Item_ID, Item_Name, Unit,Composition, Under, Quantity, Rate, Amount)
     VALUES ('$Date','$ItemId','$ItemName','$Under','$Unit','$Composition','$Quantity','$Rate','$Amout')";
   

    if($con->multi_query($sql)===TRUE)
    {
        $sql = "INSERT INTO composition(Composition) VALUES ('$Composition')";
        if($con->multi_query($sql)===TRUE)
        {
            echo "New data inserted successfully";
        }
        else
        {
            echo $con->error;
        }
    }
    else
    {
        echo "New data inserted successfully";
    }

    $con->close();
?>


