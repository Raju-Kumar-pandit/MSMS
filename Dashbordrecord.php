<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord record</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <?php
        include 'Connect.php';
            $sql = "SELECT sum(Quantity) AS quantity FROM stockitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $quantity = $row["quantity"];
                echo '<div class="div12">';
                echo "<h1 class='p1'>Stock</h1>";
                echo "<h3 class='p1'>".$quantity ."</h3>";
                echo '</div>';
            }
    ?>
    <?php
        include 'Connect.php';
        $sql = "SELECT count(Quantity) AS Quantity FROM salesitem ";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $quantity = $row["Quantity"];
                echo '<div class="div10">';
                echo "<h1 class='p1'>Today Sales</h1>";
                echo "<h3 class='p1'>".$quantity ."</h3>";
                echo '</div>';
            }
    ?>
    <div class="div10">
    <?php
        include 'Connect.php';
        $sql = "SELECT count(Quantity) AS Quantity FROM salesitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $quantity = $row["Quantity"];
                echo "<h1 class='p1'>Weekly Sales</h1>";
                echo "<h3 class='p1'>".$quantity ."</h3>";
            }
    ?>
    </div>

    <div class="div10">
    <?php
        include 'Connect.php';
        $sql = "SELECT count(Quantity) AS Quantity FROM salesitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $quantity = $row["Quantity"];
                echo "<h1 class='p1'>Monthly Sales</h1>";
                echo "<h3 class='p1'>".$quantity ."</h3>";
            }
    ?>
    </div>

    <div class="div12">
    <?php
        include 'Connect.php';
            $sql = "SELECT max(Quantity) AS Quantity,Item_Name FROM salesitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $quantity = $row["Quantity"];
                $itemname = $row["Item_Name"];
                echo "<h1 class='p1'>Fast Sales Medicine</h1>";
                echo "<h3 class='p1'>".$quantity ."</h3>";
                echo "<h3 class='p1'>".$itemname ."</h3>";
            }
    ?>
    </div>

    
</body>
</html>