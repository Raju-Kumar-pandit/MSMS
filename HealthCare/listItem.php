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
        <h1 class="h">Less stock item</h1>
            <table class="tables">
                <tr class="th">
                    <th class="rows">Quantity</th>
                    <th class="rows">Item Name</th>
                </tr>
        

                    <?php
                        include 'Connect.php';
                        $sql = "SELECT * FROM stockitem";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                            $quantity = $row["Quantity"];
                            $itemname = $row["Item_Name"];
                                if($quantity < 15){
                                echo"
                                <tr class='thtd'>
                                <td>$quantity</td>
                                <td>$itemname</td>
                                </tr>";
                                }
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
