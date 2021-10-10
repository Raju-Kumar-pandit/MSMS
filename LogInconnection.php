<?php

    include 'Connect.php';

    $emailId = $_POST["emailId"];
    $pass = $_POST["password"];

    $sql = "select email_id from userAccount where email_id='$emailId' And password='$pass'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $emailId;
        echo "<script>window.location.href='CreateCompanyForm.php'</script>";
    } else {
        echo "<script>alert('Email ID or Password Invalid')</script>";
        echo "<script>window.location.href='LogIn.php'</script>";
    }
    $con->close();


