<html>
    <head>
        <title>Sales Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'header1.php' ?>
        </div>
        <div>
            <?php include 'Menu2.php'?>
        </div>
        <div class="divs">
        <form action="" method="post">
        <h1 class="h"> List of Sales Item</h1>
        <table class="tables">
            
            <tr class="th">
                <th class="rows">Sales ID</th>
                <th class="rows">Date</th>
                <th class="rows">Customer ID</th>
                <th class="rows">Mode</th>  
                <th class="rows">Total Amount</th>
                <th class="rows">PayAmount</th>
                <th class="rows">Dues Amount</th>
                <th class="rows">Delete</th>
                <th class="rows">Next</th>

            </tr>
            <?php

                include 'Connect.php';
                $sql = "SELECT * FROM sales";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd" name="row">';
                    echo "<td>".$row["Sales_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Customer_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Total_Amount"]."</td>";
                    echo "<td>".$row["Pay_Amount"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
            ?>
                <td><button class="input"><a href='DeleteSales.php?id=<?php echo $row['Sales_ID']; ?>'>Delete</a></button></td>
                <td><button class="input"><a href='SearchSales.php?id=<?php echo $row['Sales_ID']; ?>'>Next </a></button></td>
            <?php
                    echo "</tr>";
                    }
                }
             $con->close();
            ?>
        </table>
        
        
        </form>
        </div>
        <div>
            <?php include 'footer.php' ?>
        </div>
    </body>
</html>