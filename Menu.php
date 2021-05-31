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
            float: left;
        }
        .h{
            font-size:20px;
            padding: 10px;
        }
        .p1{
            text-align: center;
        }
        .p2{
            text-align: right;
            padding: 0px 10px;
        }
        .div2 {
            background : gray;
            width:24%;
            height: 100px;
            margin:2px;
            border-radius:10px;
            text-align: center;
            padding-top: 50px;
            float: left;
        }
        .div3 {
            background : gray;
            width:24%;
            height: 100px;
            margin:2px;
            border-radius:10px;
            text-align: center;
            padding-top: 50px;
            float: left;
        }
        .aa{
            
            text-decoration: none;
            
        }
    </style>
</head>
<body>
        <div class="div2">
            <a href="form.php" class="aa">Create </a>
        </div>
        
    
    <?php
        $con = new mysqli("localhost","raju","Raju@123","test");
        if($con->connect_error){
            die("Connection failed".$con->connect_error);
        }
        $sql = "SELECT * FROM class";
        $result =$con->query($sql);
        if($result->num_rows > 0){
            while($row= $result->fetch_assoc()){
                $BatchName = $row["Batch_Name"];
                $Subject = $row["Subject_Name"];
                $Class = $row["Class_Name"];
                $Admin = $row["Admin_Name"];
                echo '<div class="div1">';
                echo "<h1 class='h'>".$BatchName ."(".$Subject.")</h1>";
                echo "<p class='p1'>$Class</p>";
                echo "<p class='p2'>$Admin</p>";
                echo '</div>';
               
            }
            
        }
        ?>
        <div class="div3">
            <a href="Deleteform.php?id=<?php echo $BatchName; ?>" class="aa">Delete </a>
        </div>
        <?php
    ?>
    
</body>
</html>