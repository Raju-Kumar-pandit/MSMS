<?php
    include 'Connect.php';

    $ItemId = $_POST["ItemId"];
    $Date = $_POST["Date"];
    $ItemName = $_POST["ItemName"];
    $Unit = $_POST["Unit"];
    $Under = $_POST["Under"];
    $StandardRate = $_POST["StandardRate"];
    $OutputGST = $_POST["OutputGST"];
    $Quantity = $_POST["Quantity"];
    $Rate = $_POST["Rate"]; 
    $Amount = $_POST["Amount"];

    $sql = "UPDATE stockItem SET Date='$Date', Item_ID='$ItemId', Item_Name='$ItemName', Unit='$Unit', Under='$Under', Quantity='$Quantity', Rate='$Rate', Amount='$Amount', Standard_Rate='$StandardRate', OutputGST='$OutputGST'";

    if($con->query($sql)===TRUE){
        echo"<script>alert('Update existing data Successfully')</script>";
        echo "<script>window.location.href='Dashbord.php'</script>";
    } else {
        echo $con->error;
    }

    $con->close();
?>
