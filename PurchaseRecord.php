<html>
    <head>
        <title>Purchase Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
         <table class="tables">
            <tr class="th">
                <th class="rows">Purchase ID</th>
                <th class="rows">Date</th>
                <th class="rows">Supplier ID</th>
                <th class="rows">Mode</th>
                <th class="rows">Item Name</th>
                <th class="rows">Batch No</th>
                <th class="rows">Quantity</th>
                <th class="rows">Rate</th>
                <th class="rows">Input GST</th>
                <th class="rows">Discount</th>
                <th class="rows">Amount</th>
                <th class="rows">Total Amount</th>
                <th class="rows">PayAmount</th>
                <th class="rows">Dues Amount</th>
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM purchase";
                $sql = "SELECT * FROM purchaseItem";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Purchase_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Supplier_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Item_Name"]."</td>";
                    echo "<td>".$row["Batch_No"]."</td>";
                    echo "<td>".$row["Quantity"]."</td>";
                    echo "<td>".$row["Rate"]."</td>";
                    echo "<td>".$row["Input_GST"]."</td>";
                    echo "<td>".$row["Discount"]."</td>";
                    echo "<td>".$row["Amount"]."</td>";
                    echo "<td>".$row["Total_Amount"]."</td>";
                    echo "<td>".$row["Pay_Amount"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
                    echo "</tr>";
                    }
                }
                $con->close();
            ?>
        
        </table>
    </body>
</html>