<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="color.css">
     <link rel="stylesheet" href="colors.css">
    <title>Document</title>
</head>
<body>
    <div class="div10">
        <div class="divs">
            <div class="div11">
            <p>By Purchse Customer</p>
            <?php
                include 'Connect.php';
                 $sql = "SELECT SUM(Total_Amount) AS Totalamount FROM sales WHERE Customer_ID='C00001'";
                $result=$con->query($sql);
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $Totalamount = $row['Totalamount'];
                    echo '
                    <ul>
                        <li>Purchased '  .$Totalamount.'</li>
                    </ul>';
                }
            ?>
            <p id="#more"><a href="">More..</a></p>
            </div>
        </div>

    </div>
</body>
</html>