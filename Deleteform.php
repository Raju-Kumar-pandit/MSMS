<?php
    $con = new mysqli("localhost","raju","Raju@123","test");
    if($con->connect_error){
        die("Connection failed".$con->connect_error);
    }
    echo "<script>alert('Are you soure')</script>";
    
        $Batch = $_GET["id"];
        echo "<script>alert('$Batch')</script>";
        $sql = "DELETE FROM class WHERE Batch_Name='$Batch'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='Menu.php'</script>";
?>