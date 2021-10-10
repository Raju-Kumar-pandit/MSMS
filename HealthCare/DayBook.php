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
        <form action="" method="post">
        <h1 class="h">Day Book</h1>
            <table class="tables">
                <tr class="th">
                    <th class="rows">Date</th>
                    <th class="rows">Inwords Quantity Amount</th>
                    <th class="rows">Outwords Quantity Amount</th>
                    <th class="rows">Next</th>
                </tr>
        
                <?php
                    include 'Connect.php';
                    
                    $sql = "SELECT * FROM purchaseitem";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $Amount=$row['Amount'];
                                //$Date=$row['Date'];
                            }
                            echo"
                                <tr class='thtd'>
                                <td></td>
                                <td>$Amount</td>
                                <td></td>";
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
            <?php include 'footer.php' ?>
    </div>
</body>
</html>
