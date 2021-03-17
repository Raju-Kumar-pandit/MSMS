<html>
    <head>
        <title>Company Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
         <table class="tables">
            <tr class="th">
                <th class="column">Company ID</th>
                <th class="column">Date</th>
                <th class="column">Company Name</th>
                <th class="column">Email ID</th>
                <th class="column">Mobile No</th>
                <th class="column">Place Name</th>
                <th class="column">State Name</th>
                <th class="column">City Name</th>
                <th class="column">Pin Code</th>
            </tr>
        
            <?php

                include 'Connect.php';

                $sql = "SELECT * FROM companyinfo";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Company_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Company_Name"]."</td>";
                    echo "<td>".$row["Email_ID"]."</td>";
                    echo "<td>".$row["Mobile_No"]."</td>";
                    echo "<td>".$row["Place_Name"]."</td>";
                    echo "<td>".$row["State_Name"]."</td>";
                    echo "<td>".$row["City_Name"]."</td>";
                    echo "<td>".$row["Pin_Code"]."</td>";
                    echo "</tr>";
                    }
                }
                $con->close();
            ?>
        
        </table>
    </body>
</html>