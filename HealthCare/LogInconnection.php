
<?php
if(isset($_POST['login'])){
    include 'Connect.php';

    $emailId = $_POST["emailid"];
    $pass = md5($_POST["password"]);

    $sql = "select email_id,Role from userAccount where email_id='$emailId' And password='$pass'";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['email'] =$row['email_id'];
        $_SESSION['Role'] = $row['Role'];
        echo "<script>window.location.href='CreateCompany.php'</script>";
        if($_SESSION['Role']=='2'){
            echo "<script>window.location.href='Dashboardback.php'</script>";
        }else{
            echo "<script>window.location.href='Dashboardcounter.php'</script>";
        }
    } else {
        echo "<script>alert('Email ID or Password Invalid')</script>";
        echo "<script>window.location.href='Login.php'</script>";
    }
    $con->close();
}
?>


