<?php
    include 'Connect.php';
    $sql = "Select UserName from useraccount";

    $result = $con->query($sql);

    if($result->num_rows>0) {
        echo '<script>window.location.href="LogIn.php"</script>';
    }
    $con->close();
?>
<html>
    <head>
        <title>Create Account</title>
        <style>
            form{
                width: 100%;
            }
            fieldset{
                width: 40%;
                font-size: 20px;
                margin-left: 30%;
                margin-right: 30%;
                border-radius: 5px;
            }
            input{
                width: 100%;
                height: 5%;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <form action="UserAccountconnection.php" method="POST">
            <fieldset>
                <legend>Create User Accont</legend>
                <label for="emailId">User Name</label><br><br>
                <input type="Text" name="UserName" id="UserName" require><br><br>
                <label for="emailId">Email ID</label><br><br>
                <input type="email" name="emailId" id="emailId" require><br><br>
                <label for="password">New Password</label><br><br>
                <input type="password" name="password" id="password" require><br><br>
                <label for="password">conform Password</label><br><br>
                <input type="password" name="password" id="password" require><br><br>
                <input type="submit" value="create Account">
            </fieldset>
        </form>
    </body>
</html>
