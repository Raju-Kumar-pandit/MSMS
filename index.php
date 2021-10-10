<?php
    include 'Connect.php';
    $sql = "Select Email_ID from useraccount";

    $result = $con->query($sql);

    if($result->num_rows>0) {

        echo '<script>window.location.href="LogIn.php"</script>';
    }
    $con->close();
?>
<html>
    <head>
        <title>Create Account</title>
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <form action="UserAccountconnection.php" method="POST" class="lform">
            <fieldset class="lfieldset">
                <legend>Create User Accont</legend>
                <label for="emailId">Email ID</label><br>
                <input type="email" name="emailId" id="emailId" class="linput" require><br><br>
                <label for="password">New Password</label><br>
                <input type="password" name="password" id="password" class="linput" require><br><br>
                <label for="password">Conform Password</label><br>
                <input type="password" name="password" id="password" class="linput" require><br><br>
                <label for="password">User Roll</label><br>
                <select name="roll" id="roll" class="linput" requare>
                    <option value="1">Admin</option>
                    <option value="0">Staff</option>
                </select><br><br>
                <input type="submit" name="CreatAccount" value="Create Account" class="linput">
            </fieldset>
        </form>
    </body>
</html>
