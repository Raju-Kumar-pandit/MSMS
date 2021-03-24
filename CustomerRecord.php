<html>
    <head>
        <title>Customer Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <form action="" method="post">
        <table class="tables">
            <tr>
                <td class="column" colspan="2"><input type="search" name="SearchId" id="SearchId" list="ids" class="input" placeholder="Search data...">
                <datalist id="ids">
                    <?php
                        include 'Connect.php';

                        $sql = "SELECT * FROM Customer";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row['Customer_ID']."></option>";
                            }
                        }
                    ?>
                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="input"></td>
            </tr>
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
            </tr>
        
            <?php

                include 'Connect.php';
            if(isset($_POST["id"])){
                $CustomerId = $_POST["SearchId"];
                $sql = "SELECT * FROM customer WHERE Customer_ID='$CustomerId'";

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
                    echo "</tr>";
                    }
                }
            }
            $con->close();
            ?>
        
        </table>
        </form>
    </body>
</html>