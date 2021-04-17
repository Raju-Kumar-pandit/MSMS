<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Stock Item</title>
</head>
<body>
    <div>
        <?php include 'Header.php'?>
    </div>
    <div>
    <form action="" method="post">
    <h1 class="h"> Edit Stock Item</h1>
        <table class="tables">
            <tr>
                <td class="column">
                <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="inputs">
                <datalist id="Searchid">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM stockItem";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $ItemId = $row["Item_ID"];
                            echo "<option value=".$ItemId."></option>";
                        }
                
                    }
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="button"></td> 
            </tr>
        </table>
    </form>
    <form action="ModifyStockItem.php" method="post">
            <?php
                include 'Connect.php';
                if(isset($_POST['id'])){
                    $ItemId = $_POST['SearchId'];
                    $sql = "SELECT * FROM stockItem WHERE Item_ID='$ItemId'";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $ItemId = $row['Item_ID'];
                            $Date = $row['Date'];
                            $ItemName = $row['Item_Name'];

                            $Unit = $row['Unit'];
                            $Under = $row['Under'];
                            $StandardRate = $row['Standard_Rate'];
                            $GSTRate = $row["GST_Rate"];
                            $SaleRate = $row["Sale_Rate"];
                            $Quantity = $row['Quantity'];
                            $Rate = $row['Rate']; 
                            $Amount = $row['Amount'];
            ?>            
                            <table class="table">
                                <tr>
                                    <th class="column">Item ID</th>
                                    <td class="column"><input type="text" name="ItemId" id="ItemId" class="inputs" value="<?php echo $ItemId; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Date</th>
                                    <td class="column"><input type="text" name="Date" id="Date" class="inputs" value="<?php echo $Date; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Item Name</th>
                                    <td class="column"><input type="text" name="ItemName" id="ItemName" class="inputs" value="<?php echo $ItemName; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Unit</th>
                                    <td class="column"><input type="text" name="Unit" id="Unit" class="inputs" value="<?php echo $Unit; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Under</th>
                                    <td class="column"><input type="text" name="Under" id="Under" class="inputs" value="<?php echo $Under; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Standard Rate</th>
                                    <td class="column"><input type="text" name="StandardRate" id="StandardRate" class="inputs" value="<?php echo $StandardRate; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">GST Rate</th>
                                    <td class="column"><input type="text" name="GSTRate" id="GSTRate" class="inputs" value="<?php echo $GSTRate; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Salling Rate</th>
                                    <td class="column"><input type="text" name="SaleRate" id="SaleRate" class="inputs" value="<?php echo $SaleRate; ?>"></td>
                                </tr>
                                <tr>
                                    <th><h2 class="h">Opening Amount</h2></th>
                                </tr>
                                <tr>
                                    <th class="column">Quantity</th>
                                    <td class="column"><input type="text" name="Quantity" id="Quantity" class="inputs" value="<?php echo $Quantity; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Rate</th>
                                    <td class="column"><input type="text" name="Rate" id="Rate" class="inputs" value="<?php echo $Rate; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Amount</th>
                                    <td class="column"><input type="text" name="Amount" id="Amount" class="inputs" value="<?php echo $Amount; ?>"></td>
                                </tr>
                                
                            </table>
                            <table class="table">
                                <tr>
                                <td class="column"><input type="submit" value="Update" class="button"></td>
                        <td class="column"><button class="button"><a href='DeleteStockItem.php?id=<?php echo $row['Item_ID']; ?>'>Delete</a></button></td>
                                </tr>
                            </table>
                        <?php    
                        }
                    } else {
                        echo "Empty data";
                    }
                }
        
            ?>
        </form>
    
    </div>
    <div>
        <?php include 'Footer.php'?>
    </div>
</body>
</html>