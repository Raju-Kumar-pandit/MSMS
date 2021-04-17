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
                <th class="rows">Purchase ID</th>
                <th class="rows">Date</th>
                <th class="rows">Supplier ID</th>
                <th class="rows">Mode</th>
                <th class="rows">Total Amount</th>
                <th class="rows">PayAmount</th>
                <th class="rows">Dues Amount</th>
                <th class="rows">Delete</th>
                <th class="rows">Next</th>
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM purchase";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Purchase_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Supplier_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Total_Amount"]."</td>";
                    echo "<td>".$row["Pay_Amount"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
                    ?>
                    <td><button class="input"><a href='DeletePurchase.php?id=<?php echo $row['Purchase_ID']; ?>'>Delete</a></button></td>
                    <td><button class="input"><a href='PurchaseItemRecord.php?id=<?php echo $row['Purchase_ID']; ?>'>Next </a></button></td>
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