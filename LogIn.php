<?php
    include 'Connect.php';
    session_start();

    if(isset($_SESSION['email'])){
        echo "<script>window.location.href='Dashbord.php'</script>";
    }
?>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <form action="LogInconnection.php" method="POST" class="lform">
            <fieldset class="lfieldset">
                <legend>Log In</legend>
                <label for="emailId">Email ID</label><br>
                <input type="email" name="emailId" id="emailId"  class="linput"><br><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" class="linput"><br><br>
                <input type="submit" value="LogIn" class="linput">
            </fieldset>
        </form>
    </body>
</html>

