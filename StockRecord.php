<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Record</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <?php include 'Header.php' ?>
    </div>
    <div>
        <form action="" method="post">
        <h1 class="h"> List of Stock Item</h1>
            <table class="tables">
                
                <tr class="th">
                    <th class="rows">Item ID</th>
                    <th class="rows">Date</th>
                    <th class="rows">Item Name</th>
                    <th class="rows">Under</th>
                    <th class="rows">Unit</th>
                    <th class="rows">Standard Rate</th>
                    <th class="rows">GSTRate%</th>
                    <th class="rows">SaleRate</th>
                    <th class="rows">Quantity</th>
                    <th class="rows">Rate</th>
                    <th class="rows">Amount</th>
                    <th class="rows">Delete</th>
                </tr>
                <?php
                    include 'Connect.php';
                        
                        $sql = "SELECT * FROM stockItem";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                echo"
                                <tr class='thtd'>
                                <td>".$row['Item_ID']."</td>
                                <td>".$row['Date']."</td>
                                <td>".$row['Item_Name']."</td>
                                <td>".$row['Under']."</td>
                                <td>".$row['Unit']."</td>
                                <td>".$row['Standard_Rate']."</td>
                                <td>".$row['GST_Rate']."</td>
                                <td>".$row['Sale_Rate']."</td>
                                <td>".$row['Quantity']."</td>
                                <td>".$row['Rate']."</td>
                                <td>".$row['Amount']."</td>";
                        ?>
                            <td><button class="input"><a href='DeleteStockItem.php?id=<?php echo $row['Item_ID']; ?>'>Delete</a></button></td>
                        <?php
                                echo "</tr>";
                            }
                        }
                        
                ?>
            </table>
        </form>
    </div>
    <div>
            <?php include 'Footer.php' ?>
    </div>
</body>
</html>