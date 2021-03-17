<?php

    include 'Connect.php';

    $Date = $_POST["Date"];
    $ItemId = $_POST["ItemId"];
    $ItemName = $_POST["ItemName"];
    $Unit = $_POST["Unit"];
    $Composition =$_POST["Composition"];

    $sql = "INSERT INTO stockItem(Date,Item_ID,Item_Name,Unit) VALUES ('$Date','$ItemId','$ItemName','$Unit')";
   
    $sql = "INSERT INTO composition(Composition) VALUES ('$Composition')";

    if($con->multi_query($sql)===TRUE)
    {
        echo "New data inserted successfully";
    }
    else
    {
        echo $con->error;
    }

    $con->close();
?>


