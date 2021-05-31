<html>
    <head>
        <title>Return Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
    <div>
        <?php include 'Header.php'?>
    </div>
        <h1 class="h">List of Return Ttems</h1>
         <table class="tables">
            <tr class="th">
                <th class="rows">Return ID</th>
                <th class="rows">Date</th>
                <th class="rows">Supplier ID</th>
                <th class="rows">Mode</th>
                <th class="rows">Total Amount</th>
                <th class="rows">Dues Amount</th>
                <th class="rows">Next</th>
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM returnsItem";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Return_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Supplier_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Total_Amount"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
                    ?>
                    <td><button class="input"><a href='ReturnItemsRecord.php?id=<?php echo $row['Return_ID']; ?>'>Next </a></button></td>
                
                    <?php
                    echo "</tr>";
                    }
                    
                }
                $con->close();
            ?>
        
        </table>
        <div>
            <?php include 'Footer.php'?>
        </div>
    </body>
</html>