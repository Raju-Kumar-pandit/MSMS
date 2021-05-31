<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Reports</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <?php include 'Header.php' ?>
    </div>
    <div>
        <form action="" method="post">
        <h1 class="h"> Clossing Amount</h1>
            <table class="tables">
                
                <tr class="th">
                    <th class="rows">Item Name</th>
                    <th class="rows">Quantity</th>
                    <th class="rows">Rate</th>
                    <th class="rows">Amount</th>
                </tr>
                <?php
                    include 'Connect.php';
                        
                    //$sql = "SELECT((SELECT SUM(Quantity) FROM stockitem) + (SELECT SUM(Quantity) FROM purchaseitem)) - (SELECT SUM(Quantity) FROM salesitem) AS Quantity,Item_Name, Rate, Amount";
                        $sql = "SELECT * FROM stockitem";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                echo"
                                <tr class='thtd'>
                                <td>".$row['Item_Name']."</td>
                                <td>".$row['Quantity']."</td>
                                <td>".$row['Rate']."</td>
                                <td>".$row['Amount']."</td>";
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