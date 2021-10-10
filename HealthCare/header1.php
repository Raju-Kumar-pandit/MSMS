<?php
    include 'Connect.php';
    $name="null";
    $sql=" SELECT Company_Name  FROM companyinfo";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {   
        $row = $result->fetch_assoc();
        $name = $row['Company_Name'];
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
    <title>Header</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1><?php echo $name; ?></h1>
        </div>
        <div class="dropdwon">
            <button class="dropbtn log"><a href="LogOut.php">LOGOUT</a></button>
        </div>
        
    </div>
</body>
</html>