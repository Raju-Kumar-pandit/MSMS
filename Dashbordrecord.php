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
<div class="div11">
    <div class="div10">
    <h3>Out Of Stock in Few Days </h3>
        <table>
        <tr>
            <th>Quantity</th>
            <th>Name</th>
        </tr>
        <?php
            include 'Connect.php';
            $sql = "SELECT * FROM stockitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $quantity = $row["Quantity"];
                    $itemname = $row["Item_Name"];
                    if($quantity < 15){
                    echo"
                    <tr>
                    <td>$quantity</td>
                    <td>$itemname</td>
                    </tr> 
                    ";
                    }
                }
            }
        ?>
    
    </table>
    </div>


    <?php
        include 'Connect.php';
        $sql = "SELECT((SELECT SUM(Quantity) FROM stockitem) + (SELECT SUM(Quantity) FROM purchaseitem)) - (SELECT SUM(Quantity) FROM salesitem) AS quantity";
            //$sql = "SELECT sum(Quantity) AS quantity FROM stockitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $quantity = $row["quantity"];
                echo '<div class="div10">';
                echo "<h3 class='p1'>Stock Quantity</h3>";
                echo "<h3 class='p1'>".$quantity ."</h3>";
                echo '</div>';
            }
    ?>

    <div class="div10">
        <?php
            include 'Connect.php';
                    
                $sql = "SELECT Sum(Total_Amount) AS Amount FROM sales where Date = curdate()";
                $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $amount = $row["Amount"];
                        echo "<h3 class='p1'>Today Sales</h3>";
                        echo "<h3 class='p1'>".$amount ."</h3>";
                        
                    } else {
                        echo "<h3 class='p1'>Today Item Not Sales Now</h3>";
                    }
        ?>
    </div>

    <div class="div10">
    <?php
            $sql = "SELECT SUM(Total_Amount) as Amount FROM sales WHERE week(Date)=week(now())";
            $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $amount = $row["Amount"];
                        echo "<h3 class='p1'>Week Sales</h3>";
                        echo "<h3 class='p1'>".$amount ."</h3>";
                        
                    } else {
                        echo "<h3 class='p1'>Today Item Not Sales Now</h3>";
                    }
            
        ?>
    </div>

    <div class="div10">
    <?php
        include 'Connect.php';
        $sql = "SELECT Sum(Total_Amount) AS Amount FROM sales WHERE month(Date)=month(now())";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $amount = $row["Amount"];
                echo "<h3 class='p1'>Monthly Sales</h3>";
                echo "<h3 class='p1'>".$amount ."</h3>";
            }
    ?>
    </div>

    <div class="div10">
    <?php
        include 'Connect.php';
        $sql = "SELECT Sum(Total_Amount) AS Amount FROM sales WHERE year(Date)=year(now())";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $amount = $row["Amount"];
                echo "<h3 class='p1'>Yearly Sales</h3>";
                echo "<h3 class='p1'>".$amount ."</h3>";
            } else{
                echo "<h3 class='p1'>Today is not Sales</h3>";
            }
    ?>
    </div>
    <div class="div10">
    <h3>Top Sales Medicines</h3>
        <table>
        <tr>
            <th>Quantity</th>
            <th>Name</th>
        </tr>
        <?php
            include 'Connect.php';
            $sql = "SELECT * FROM salesitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $quantity = $row["Quantity"];
                    $itemname = $row["Item_Name"];
                    if($quantity >= 100){
                    echo"
                    <tr>
                    <td>$quantity</td>
                    <td>$itemname</td>
                    </tr> 
                    ";
                    }
                }
            }
        ?>
    </table>
    </div>
    <div class="div10">
    <?php
        include 'Connect.php';
        $sql = "SELECT ((SELECT sum(Total_Amount) from purchase)-(SELECT sum(Total_Amount)FROM sales)) AS Amount";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $amount = $row["Amount"];
                echo "<h3 class='p1'>Profit & Lost</h3>";
                echo "<h3 class='p1'>".$amount."</h3>";
            }
    ?>
    </div>
    <div class="div10">
    <?php
        include 'Connect.php';
        $sql = "SELECT((SELECT SUM(Dues_Amount) FROM Sales) - (SELECT SUM(Pay_Amount) FROM payment)) AS Dues";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                $Dues = $row["Dues"];
                echo '<div class="div10">';
                echo "<h3 class='p1'>Duses Amount</h3>";
                echo "<h3 class='p1'>".$Dues."</h3>";
                echo '</div>';
                }
            }
    ?>
    </div>
</div>


</body>
</html>