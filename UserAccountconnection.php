<?php
    session_start()
?>
<?php
    include 'Connect.php';

    $emailId = $_POST["emailId"];
    $pass = $_POST["password"];
    $roll = $_POST["roll"];
    $sql = "INSERT INTO userAccount (Email_ID,Password,Roll) VALUES ('$emailId','$pass','$roll')";


    if($con->query($sql)===TRUE){
        echo "<script>window.location.href='LogIn.php'</script>";
    } else {
        echo $con->error;
    }

?>