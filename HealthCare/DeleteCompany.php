<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $CompanyId = $_GET["id"];
        echo "<script>alert('$CompanyId')</script>";
        $sql = "DELETE FROM companyinfo WHERE Company_ID='$CompanyId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='CompanyRecord.php'</script>";
?>