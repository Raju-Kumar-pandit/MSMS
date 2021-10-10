<html>
    <head>
        <title>Payment Record</title>
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
        <h1 class="h">List of Payment</h1>
         <table class="tables">
            <tr class="th">
                <th class="column">Payment ID</th>
                <th class="column">Date</th>
                <th class="column">Ledger ID</th>
                <th class="column">Mode</th>
                <th class="column">Dues Amount</th>
                <th class="column">Pay Amount</th>
                <th class="column">Current Dues Amount</th>
            
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM otherpayment";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Payment_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["ledger_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
                    echo "<td>".$row["Pay_Amount"]."</td>";
                    echo "<td>".$row["Current_Dues_Amount"]."</td>";
                    echo "</tr>";
                    }
                }
                $con->close();
            ?>
        
        </table>
        <div>
            <?php include 'footer.php' ?>
        </div>
    </body>
</html>