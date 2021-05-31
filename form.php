<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div1 {
            background : gray;
            width:24%;
            margin:2px;
            border-radius:10px;
            padding: 10px;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="div1">
        <form action="fromconnect.php" method="POST">
            <label for="BatchName">Batch Name</label>
            <input type="text" name="BatchName" id="BatchName"><br>
            <label for="SubjectName">Subject Name</label>
            <input type="text" name="SubjectName" id="SubjectName"><br>
            <label for="ClassName">Class Name</label>
            <input type="text" name="ClassName" id="ClassName"><br>
            <label for="AdminName">Admin Name</label>
            <input type="text" name="AdminName" id="AdminName"><br>
            <input type="submit" value="Create">
        </form>
    </div>
</body>
</html>