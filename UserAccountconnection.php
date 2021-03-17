<?php
    session_start()
?>
<?php
    include 'Connect.php';

    $userName =$_POST["UserName"];
    $emailId = $_POST["emailId"];
    $pass = $_POST["password"];

    $sql = "INSERT INTO userAccount (UserName,Email_ID,Password) VALUES ('$userName','$emailId','$pass')";


    if($con->query($sql)===TRUE){
        echo "<script>window.location.href='LogIn.php'</script>";
    } else {
        echo $con->error;
    }



?>