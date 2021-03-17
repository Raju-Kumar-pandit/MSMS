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
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <form action="UserAccountconnection.php" method="POST" class="lform">
            <fieldset class="lfieldset">
                <legend>Create User Accont</legend>
                <label for="emailId">User Name</label><br>
                <input type="Text" name="UserName" id="UserName" class="linput" require><br><br>
                <label for="emailId">Email ID</label><br>
                <input type="email" name="emailId" id="emailId" class="linput" require><br><br>
                <label for="password">New Password</label><br>
                <input type="password" name="password" id="password" class="linput" require><br><br>
                <label for="password">conform Password</label><br>
                <input type="password" name="password" id="password" class="linput" require><br><br>
                <input type="submit" value="Create Account" class="linput">
            </fieldset>
        </form>
    </body>
</html>
