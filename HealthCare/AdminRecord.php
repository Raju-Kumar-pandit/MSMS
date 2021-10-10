<html>
    <head>
        <title>Admin Record</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'header.php' ?>
        </div>
        <form action="" method="post" class="divs">
        <h1 class="h">Lists of Admins</h1>
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
                <th class="column">Delete</th>
            </tr>
            <?php

                include 'Connect.php';
                    $sql = "SELECT * FROM admin";

                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        
                        while($row = $result->fetch_assoc()){
                        echo "<tr class='thtd'>";
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
            ?>
                        <td><button class="input"><a href='DeleteAdmin.php?id=<?php echo $row['Admin_ID']; ?>'>Delete</a></button></td>
            <?php
                        echo "</tr>";
                        }
                        
                    }
                
            ?>
            </tr>
        </table>
        </form>
        <div>
            <?php include 'footer.php' ?>
        </div>
    </body>
</html>