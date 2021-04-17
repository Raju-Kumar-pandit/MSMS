<html>
    <head>
        <title>Customer Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'Header.php' ?>
        </div>
        <form action="" method="post">
        <h1 class="h">Lists of Customers</h1>
        <table class="tables">
            <tr class="th">
                <th class="column">Customer ID</th>
                <th class="column">Date</th>
                <th class="column">PatientName</th>
                <th class="column">PatientAge</th>
                <th class="column">Gender</th>
                <th class="column">Customer Name</th>
                <th class="column">Mobile No</th>
                <th class="column">Village Name</th>
                <th class="column">State Name</th>
                <th class="column">City Name</th>
                <th class="column">Delete</th>
            </tr>
        
            <?php

                include 'Connect.php';
                
                $sql = "SELECT * FROM customer";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Customer_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Patient_Name"]."</td>";
                    echo "<td>".$row["Patient_Age"]."</td>";
                    echo "<td>".$row["Gender"]."</td>";
                    echo "<td>".$row["Customer_Name"]."</td>";
                    echo "<td>".$row["Mobile_No"]."</td>";
                    echo "<td>".$row["Village_Name"]."</td>";
                    echo "<td>".$row["State_Name"]."</td>";
                    echo "<td>".$row["City_Name"]."</td>";
            ?>
                    <td><button class="input"><a href='DeleteCustomer.php?id=<?php echo $row['Customer_ID']; ?>'>Delete</a></button></td>
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