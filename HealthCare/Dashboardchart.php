
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="color.css">
    <title>Dashboardchart</title>
</head>
<body>
<div class="div10">
    <div class="div9">
        <p>Sales Chart Color</p>
        <ul>
            <li class="ul1">Out of stock</li>
            <li class="ul2">Stock Item</li>
            <li class="ul3">Today</li>
            <li class="ul4">Weekly</li>
            <li class="ul5">Monthly </li>
            <li class="ul6">yearly </li>
            <li class="ul7">Top Sales </li>
            <li class="ul8">Profit & lost</li>
            <li class="ul9">Duses</li>
        </ul>
    </div>
</div>
    <div class="div10">
        <div class="div11">
            <h5>Out of stock in few days</h5>
            <?php
            include 'Connect.php';
            $sql = "SELECT * FROM stockitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $quantity = $row["Quantity"];
                    $itemname = $row["Item_Name"];
                    if($quantity < 15){
                    echo'
                    <ul class="ul1">
                        
                        <li>'.$quantity.'-'.$itemname.'</li>
                    </ul> 
                    ';
                    }
                }
            }
        ?>
        </div>
        <div class="div11">
            <h5>Sales Amount</h5>
            <?php
                include 'Connect.php';
                $sql = "SELECT ((SELECT sum(Total_Amount)FROM sales)-(SELECT SUM(Amount) FROM stockitem)-(SELECT sum(Total_Amount) from purchase)) AS Amount";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $quantity = $row["Amount"];
                    echo '
                    <ul class="ul2">
                        <li>'.$quantity .'</li>
                    </ul>';
                }
            ?>    
        </div>
        <div class="div11">
            <h5>Today Amount</h5>
            <?php
                include 'Connect.php';
                $sql = "SELECT Sum(Total_Amount) AS Amount FROM sales where Date = curdate()";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $amount = $row["Amount"];
                        echo '
                        <ul class="ul3">
                            <li>'.$amount .'</li>
                        </ul>
                        ';
                    }
            ?>
        </div>
        <div class="div11">
            <h5>Weekly Amount</h5>
            <?php
            $sql = "SELECT SUM(Total_Amount) as Amount FROM sales WHERE week(Date)=week(now())";
            $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $amount = $row["Amount"];
                        echo '
                        <ul class="ul4">
                            <li>'.$amount .'</li>
                        </ul>';
                        
                    } else {
                        echo "";
                    }
            
            ?>
        </div>
        <div class="div11">
            <h5>Monthly Amount</h5>
            <?php
                include 'Connect.php';
                $sql = "SELECT Sum(Total_Amount) AS Amount FROM sales WHERE month(Date)=month(now())";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $amount = $row["Amount"];
                        echo '
                        <ul class="ul5">
                            <li>'.$amount .'</li>
                        </ul>';
                    }
            ?>
        </div>
        <div class="div11">
            <h5>Yearly Amount</h5>
            <?php
                include 'Connect.php';
                $sql = "SELECT Sum(Total_Amount) AS Amount FROM sales WHERE year(Date)=year(now())";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $amount = $row["Amount"];
                        echo '
                        <ul class="ul6">
                            <li>'.$amount .'</li>
                        </ul>';
                    } else{
                        echo "";
                    }
            ?>
        </div>
        <div class="div11">
            <h5>Top Sales</h5>
            <?php
            include 'Connect.php';
            $sql = "SELECT * FROM salesitem";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $quantity = $row["Quantity"];
                    $itemname = $row["Item_Name"];
                    if($quantity >= 50){
                    echo'
                    <ul class="ul7">
                        <li>'.$quantity.'-'.$itemname.'</li>
                    </ul> 
                    ';
                    }
                }
            }
            ?>
        </div>
        <div class="div11">
            <h5>Profit & Lost</h5>
            <?php
                include 'Connect.php';
                $sql = "SELECT ((SELECT sum(Pay_Amount)FROM sales)-(SELECT SUM(Amount) FROM stockitem)-(SELECT sum(Pay_Amount) from purchase)+(SELECT SUM(Pay_Amount) FROM receivepayment)-(SELECT SUM(Pay_Amount) FROM payment)) AS Amount";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $amount = $row["Amount"];
                        echo '
                        <ul class="ul8">
                            <li>'.$amount.'</li>
                        </ul>';
                    }
            ?>
        </div>
        <div class="div11">
            <h5>Customer Duses Amount</h5>
            <?php
                include 'Connect.php';
                $sql = "SELECT((SELECT SUM(Dues_Amount) FROM Sales) - (SELECT SUM(Pay_Amount) FROM receivepayment)) AS Dues";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                        $Dues = $row["Dues"];
                        echo '<ul class="ul9">
                            <li>'.$Dues.'</li>
                        </ul>';
                        }
                    }
            ?>
        </div>
        <div class="div11">
            <h5>Supplier Duses Amount</h5>
            <?php
                include 'Connect.php';
                $sql = "SELECT((SELECT SUM(Dues_Amount) FROM purchase) - (SELECT SUM(Pay_Amount) FROM payment)) AS Dues";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                        $Dues = $row["Dues"];
                        echo '<ul class="ul9">
                            <li>'.$Dues.'</li>
                        </ul>';
                        }
                    }
            ?>
        </div>
        <div class="div11">
            <p>Total Customer</p>
            <?php include 'Connect.php';
                $sql = "SELECT COUNT(Customer_ID) AS Customer FROM customer";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $customer = $row["Customer"];
                        echo '<ul>
                            <li>'.$customer.'</li>
                        </ul>';
                    }
                }
            ?>
        </div>
        <div class="div11">
            <p>Total Supplier</p>
            <?php include 'Connect.php';
                $sql = "SELECT COUNT(Supplier_ID) AS Supplier FROM supplier";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $customer = $row["Supplier"];
                        echo '<ul>
                            <li>'.$customer.'</li>
                        </ul>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>