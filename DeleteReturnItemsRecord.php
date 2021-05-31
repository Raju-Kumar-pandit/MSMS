<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $ReturnId = $_GET["id"];
        echo "<script>alert('$ReturnId')</script>";
        $sql = "DELETE FROM returnItems WHERE Return_ID='$ReturnId'";
        if($result= $con->query($sql)===TRUE){
            $ReturnId = $_GET["id"];
            $sql = "DELETE FROM returnsItem WHERE Return_ID='$ReturnId'";
            $result= $con->query($sql);
            echo "<script>alert('Delete data Successfully')</script>";
            echo "<script>window.location.href='EditReturnItem.php'</script>";
        }

        
?>