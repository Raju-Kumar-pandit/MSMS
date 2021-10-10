<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $StaffId = $_GET["id"];
        echo "<script>alert($StaffId')</script>";
        $sql = "DELETE FROM staff WHERE Staff_ID='$StaffId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='StaffRecord.php'</script>";
?>