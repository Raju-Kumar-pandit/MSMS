
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="color.css">
    <title>Create User</title>
</head>
<body>
    <div class="login">
        <form action="UserAccountconnection.php" method="post" class="loginform">
            <h3>Sign Up</h3>
            <input type="email" name="emailid" id="emailid" class="loginput" placeholder="Email Address" required><br>
            <input type="password" name="password" id="password" class="loginput" placeholder="Password" required><br>
            <input type="password" name="conformpassword" id="conformpassword" class="loginput" placeholder="Comform Password" required><br>
            <select name="role" id="role" class="loginput"value=" Select User Role" required>
                <option value="1">Admin</option>
                <option value="2">Back Office Staff</option>
                <option value="3">Billing Staff</option>
            </select><br>
            <input type="submit" value="Sign Up" name="signup" class="logsubmit"><br>
        </form>
    </div>
</body>
</html>