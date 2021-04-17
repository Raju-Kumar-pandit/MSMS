<html>
    <head>
        <title>Receive Payment Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'Header.php' ?>
        </div>
        <h1 class="h">List of Receive Payment</h1>
         <table class="tables">
            <tr class="th">
                <th class="column">Receive Payment ID</th>
                <th class="column">Date</th>
                <th class="column">Customer ID</th>
                <th class="column">Mode</th>
                <th class="column">Dues Amount</th>
                <th class="column">Pay Amount</th>
                <th class="column">Current Dues Amount</th>
                <th class="column">Delete</th>
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM receivePayment";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Payment_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Customer_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
                    echo "<td>".$row["Pay_Amount"]."</td>";
                    echo "<td>".$row["Current_Dues_Amount"]."</td>";
                    ?>
                    <td class="column"><button class="input"><a href='DeleteReceivePayment.php?id=<?php echo $row['Payment_ID']; ?>'>Delete</a></button></td>
                    <?php
                    echo "</tr>";
                    }
                }
                $con->close();
            ?>
        
        </table>
        <div>
            <?php include 'Footer.php' ?>
        </div>
    </body>
</html>