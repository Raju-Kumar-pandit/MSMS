<?php
    include 'Connect.php';
    session_start();

    if(isset($_SESSION['email'])){
        echo "<script>window.location.href='Dashboard.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="color.css">
    <title>Login form</title>
</head>
<body>
    <div class="login">
        <form action="LogInconnection.php" method="post" class="loginform">
            <h3>Login</h3><br>
            <input type="email" name="emailid" id="emailid" class="loginput" placeholder="Eamil Address" required><br>
            <input type="password" name="password" id="password" class="loginput" placeholder="Password" required><br>
            <input type="submit" value="LogIn" name="login" class="logsubmit"><br>
            <span>forgot <a href="#">Password?</a></span>
        </form>
    </div>
</body>
</html>