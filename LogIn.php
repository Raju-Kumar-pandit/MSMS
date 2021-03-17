<html>
    <head>
        <title>Log In</title>
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
        <form action="LogInconnection.php" method="POST">
            <fieldset>
                <legend>Log In</legend>
                <label for="emailId">Email ID</label><br><br>
                <input type="email" name="emailId" id="emailId"><br><br>
                <label for="password">Password</label><br><br>
                <input type="password" name="password" id="password"><br><br>
                <input type="submit" value="Log In">
            </fieldset>
        </form>
    </body>
</html>

