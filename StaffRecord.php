<html>
    <head>
        <title>Staff Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
       <div>
            <?php include 'Header.php' ?>
        </div>
        <form action="" method="post">
        <h1 class="h">Lists of Staffs</h1>
        <table class="tables">
            <tr class="th">
                <th class="column">Staff ID</th>
                <th class="column">Date</th>
                <th class="column">Staff Name</th>
                <th class="column">Date of Birth</th>
                <th class="column">Gender</th>
                <th class="column">Mobile No</th>
                <th class="column">Email ID</th>
                <th class="column">State Name</th>
                <th class="column">City Name</th>
                <th class="column">Delete</th>
                
            </tr>
        
            <?php

                include 'Connect.php';
            
                $sql = "SELECT * FROM staff";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd">';
                    echo "<td>".$row["Staff_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Staff_Name"]."</td>";
                    echo "<td>".$row["DOB"]."</td>";
                    echo "<td>".$row["Gender"]."</td>";
                    echo "<td>".$row["Mobile_No"]."</td>";
                    echo "<td>".$row["Email_ID"]."</td>";
                    echo "<td>".$row["State_Name"]."</td>";
                    echo "<td>".$row["City_Name"]."</td>";
            ?>
                    <td><button class="input"><a href='DeleteStaff.php?id=<?php echo $row['Staff_ID']; ?>'>Delete</a></button></td>
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