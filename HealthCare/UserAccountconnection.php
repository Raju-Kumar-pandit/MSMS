<?php
    session_start();
?>
<?php
if(isset($_POST['signup'])){
    include 'Connect.php';

    $emailId = $_POST["emailid"];
    $pass = md5($_POST["password"]);
    $role = $_POST["role"];
    $sql = "INSERT INTO userAccount (Email_ID,Password,Role) VALUES ('$emailId','$pass','$role')";


    if($con->query($sql)===TRUE){
        echo "<script>window.location.href='Login.php'</script>";
    } else {
        echo $con->error;
    }
}
?>