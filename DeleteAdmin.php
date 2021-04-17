<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $AdminId = $_GET["id"];
        echo "<script>alert('$AdminId')</script>";
        $sql = "DELETE FROM admin WHERE Admin_ID='$AdminId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='AdminRecord.php'</script>";
?>