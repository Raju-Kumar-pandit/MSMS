<html>
    <head>
        <title>Purchase Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'Header.php' ?>
        </div>
        <form action="" method="post">
        <h1 class="h"> List of Purchase Item</h1>
        <table class="tables">
            <tr class="th">
                <th class="rows">Item Name</th>
                <th class="rows">Batch No</th>
                <th class="rows">Quantity</th>
                <th class="rows">Rate</th>
                <th class="rows">ActualAmt</th>
                <th class="rows">Discount</th>
                <th class="rows">SGSTP</th>
                <th class="rows">SGST</th>
                <th class="rows">CGSTP</th>
                <th class="rows">CGST</th>
                <th class="rows">Amount</th>
                <th class="rows">Delete</th>
            </tr>
        
            <?php

                include 'Connect.php';
                $row = $_GET["id"];
                $sql = "SELECT * FROM purchaseitem WHERE Purchase_ID='$row'";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Item_Name"]."</td>";
                    echo "<td>".$row["Batch_No"]."</td>";
                    echo "<td>".$row["Quantity"]."</td>";
                    echo "<td>".$row["Rate"]."</td>";
                    echo "<td>".$row["Actual_Amount"]."</td>";
                    echo "<td>".$row["Discount"]."</td>";
                    echo "<td>".$row["SGSTRate"]."</td>";
                    echo "<td>".$row["SGSTAmount"]."</td>";
                    echo "<td>".$row["CGSTRate"]."</td>";
                    echo "<td>".$row["CGSTAmount"]."</td>";
                    echo "<td>".$row["Amount"]."</td>";
                    ?>
                    <td><button class="input"><a href='DeletePurchaseItem.php?id=<?php echo $row['Purchase_ID']; ?>'>Delete</a></button></td>
                    <?php
                    echo "</tr>";
                    }
                }
                $con->close();
            ?>
        
        </table>
        </form>
        <div>
            <?php include 'Footer.php' ?>
        </div>
    </body>
</html>