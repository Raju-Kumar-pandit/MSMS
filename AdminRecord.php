<html>
    <head>
        <title>Admin Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
         <table class="tables">
            <tr class="th">
                <th class="column">Admin ID</th>
                <th class="column">Date</th>
                <th class="column">Admin Name</th>
                <th class="column">DOB</th>
                <th class="column">Gender</th>
                <th class="column">Email ID</th>
                <th class="column">Mobile No</th>
                <th class="column">Village Name</th>
                <th class="column">State Name</th>
                <th class="column">City Name</th>
                
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM admin";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Admin_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Admin_Name"]."</td>";
                    echo "<td>".$row["DOB"]."</td>";
                    echo "<td>".$row["Gender"]."</td>";
                    echo "<td>".$row["Email_ID"]."</td>";
                    echo "<td>".$row["Mobile_No"]."</td>";
                    echo "<td>".$row["Village_Name"]."</td>";
                    echo "<td>".$row["State_Name"]."</td>";
                    echo "<td>".$row["City_Name"]."</td>";
                    
                    echo "</tr>";
                    }
                }
                $con->close();
            ?>
        
        </table>
    </body>
</html>