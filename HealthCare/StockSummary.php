<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Summary</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <?php include 'header1.php' ?>
    </div>
    <div>
        <?php include 'Menu2.php'?>
    </div>
    <div class="divs">
        <form action="" method="post">
        <h1 class="h">Clossing Amount</h1>
            <table class="tables">
                <tr class="th">
                    <th class="rows">Item Name</th>
                    <th class="rows">Amount</th>
                    <th class="rows">Next</th>
                </tr>
        
                <?php
                    include 'Connect.php';
                    $total=0;
                    $sql = "SELECT * FROM stockitem";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $Amount=$row['Amount'];
                                $Under=$row['Under'];
                                $total = $total+$Amount;
                            }
                            echo"
                                <tr class='thtd'>
                                <td>$Under</td>
                                <td>$total</td>";
                                ?>
                                <td><button class="button"><a href='StockReports.php'>Next</a></button></td>
                                <?php
                            echo "</tr>";
                        }
                ?>
            </table>
        </form>
    </div>
    <div>
    <form action="" method="post">
            <table class="tables">
                <tr class="th">
                    <th class="rows"> Total Quantity</th>
                </tr>
                
            </table>
            <h1 class="h">Short list Item Order by Expiry date</h1>
            <table class="tables">
                <tr class="th">
                    <th class="rows">Item Name</th>
                    <th class="rows">Expiry Date</th>
                </tr>
        
                <?php
                    include 'Connect.php';
                    $sql = "SELECT * FROM stockitem order by Expiry_Date";
                        $result = $con->query($sql);
                        if($result->num_rows > 0)
                        {
                            while($row= $result->fetch_array()){
                            
                                $Expirydate=$row['Expiry_Date'];
                                $ItemName = $row['Item_Name'];
                            
                            echo"
                                <tr class='thtd'>
                                <td>$ItemName</td>
                                <td>$Expirydate</td>";
                            echo "</tr>";
                            }
                        }
                ?>
                
            </table>
        </form>
    </div>
    <div>
            <?php include 'footer.php' ?>
    </div>
</body>
</html>
