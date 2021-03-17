<html>
    <head>
        <title>Return Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
         <table class="tables">
            <tr class="th">
                <th class="rows">Return ID</th>
                <th class="rows">Date</th>
                <th class="rows">Customer ID</th>
                <th class="rows">Mode</th>
                <th class="rows">Item Name</th>
                <th class="rows">Batch No</th>
                <th class="rows">Quantity</th>
                <th class="rows">Rate</th>
                <th class="rows">Input GST</th>
                <th class="rows">Discount</th>
                <th class="rows">Amount</th>
                <th class="rows">Total Amount</th>
                <th class="rows">Dues Amount</th>
                <th class="rows">Current Dues Amount</th>
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM returnsItem";
                $sql = "SELECT * FROM returnItems";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Return_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Customer_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Item_Name"]."</td>";
                    echo "<td>".$row["Batch_No"]."</td>";
                    echo "<td>".$row["Quantity"]."</td>";
                    echo "<td>".$row["Rate"]."</td>";
                    echo "<td>".$row["Input_GST"]."</td>";
                    echo "<td>".$row["Discount"]."</td>";
                    echo "<td>".$row["Amount"]."</td>";
                    echo "<td>".$row["Total_Amount"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
                    echo "<td>".$row["Current Dues_Amount"]."</td>";
                    echo "</tr>";
                    }
                }
                $con->close();
            ?>
        
        </table>
    </body>
</html>