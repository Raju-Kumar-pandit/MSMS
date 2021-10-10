<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colors.css">
    <title>List of Ledger</title>
</head>
<body>
<div>
        <?php include 'header1.php'?>
    </div>
    <div>
        <?php include 'Menu1.php'?>
    </div>
    <div class="divs">
        <form action="" method="post">
            <h1 class="h">Edit Ledger Info</h1>
            <table class="tables">
            <tr class="th">
            <th class="column">Ledger ID</th> 
            <th class="column">Name</th>
            <th class="column">Under</th>
            <th class="column">Opening Amount</th>
            <th class="column">Delete</th>
            </tr>    

            <?php
            include 'Connect.php';
                    $sql = "SELECT * FROM ledger";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $LedgerId = $row['Ledger_ID'];
                            $Name = $row['Name'];
                            $Under = $row['Under'];
                            $OpenAmount = $row['Opening_Amount'];
                    
    
                                echo '<tr class="thtd">';    
                                    echo "<td>$LedgerId</td>";
                                    echo "<td>$Name</td>";
                                    echo "<td>$Under</td>";
                                    echo "<td>$OpenAmount</td>";
            ?>
                                    <td><button class='input'><a href='DeleteLedger.php?id=<?php echo $row['Ledger_ID']; ?>'>Delete</a></button></td>
            <?php 
                                echo "</tr>";          
                        }
                    } else {
                        echo "Empty data";
                    }
                
        
            ?>
            </table>
        </form>
    </div>
    <div>
        <?php include 'footer.php'?>
    </div>
</body>
</html>