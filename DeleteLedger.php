<?php
    include 'Connect.php';
    echo "<script>alert('Are you soure')</script>";
    

        $LedgerId = $_GET["id"];
        echo "<script>alert('$LedgerId')</script>";
        $sql = "DELETE FROM ledger WHERE Ledger_ID='$LedgerId'";
        $result= $con->query($sql);
        echo "<script>alert('Delete data Successfully')</script>";
        echo "<script>window.location.href='LedgerRecord.php'</script>";
?>