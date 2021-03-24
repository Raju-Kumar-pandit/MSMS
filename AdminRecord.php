<html>
    <head>
        <title>Admin Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <form action="" method="post">
        <h1 class="h">List of Admin</h1>
        <table class="tables">
            <tr>
                <td class="column" colspan="2">
                <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="input">
                <datalist id="Searchid">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM admin";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $AdminId = $row["Admin_ID"];
                            echo "<option value=".$AdminId."></option>";
                        }
                    }
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="input"></td> 
            </tr>
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
                if(isset($_POST["id"])){
                    $AdminId = $_POST["SearchId"];
                    $sql = "SELECT * FROM admin WHERE Admin_ID='$AdminId'";

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
                        echo "</tr>";
                        }
                        
                    }
                }
    
            ?>
            </tr>
        </table>
        </form>
    </body>
</html>