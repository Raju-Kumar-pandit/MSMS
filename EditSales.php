
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sales form</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <?php include 'Header.php' ?>
    </div>
    <div>
        <form action="" method="post">
            <h1 class="h">Edit Sales form</h1>
            <table class="table">
            <tr>
                <td>
                <input type="search" name="SearchId" list="Searchids" id="SearchId" placeholder="Search data....." class="inputs">
                <datalist id="Searchids">
                <?php
                    include 'Connect.php';

                    $sql = "SELECT * FROM sales";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $SalesId = $row["Sales_ID"];
                            echo "<option value=".$SalesId."></option>";
                        }
                    } else {
                        echo "Empty data records". $con->error;
                    }
                $con->close();
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="input"></td>
            </tr>
            </table>
        </form>
        <form action="ModifySales.php" method="post"> 
            <?php
            if(isset($_POST['id'])){
                $SalesId = $_POST['SearchId'];

                include 'Connect.php';
                $sql = "SELECT * FROM sales WHERE Sales_ID='$SalesId'";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    
                    $row = $result->fetch_assoc();
        
                    $SalesId = $row["Sales_ID"];
                    $Date = $row["Date"];
                    $CustomerId= $row["Customer_ID"];
                    $Mode = $row["Mode"];
                    $TotalAmount = $row["Total_Amount"];
                    $PayAmount = $row["Pay_Amount"];
                    $DuesAmount = $row["Dues_Amount"];
                }
                ?>
                <table class="table">
                        <tr>
                            <th class="column">Sales ID</th>
                            <td class="column"><input type="text"  name="SalesId" id="SalesId" class="input" value="<?php echo $SalesId; ?>" readonly></td>
                            <th class="column">Date</th>
                            <td class="column"><input type="text" name="Date" id="Date" class="input" value="<?php echo $Date; ?>" readonly></td>
                        </tr>
                        <tr>
                            <th class="column">Customer ID</th>
                            <td class="column"><input type="text"  name="CustomerId" id="CustomerId" class="input" value="<?php echo $CustomerId; ?>"></td>
                            <th class="column">Mode</th>
                            <td>
                                <input type="text" name="Mode" id="Mode" class="input" value="<?php echo $Mode; ?>" required>
                            </td>
                        </tr>
                    </table>
                <table class="table">
                    <tr>
                        <th class="Item">Item Name</th>
                        <th class="column">Batch No.</th>
                        <th class="column">Quantity</th>
                        <th class="column">Rate</th>
                        <th class="column">Dicount</th>
                        <th class="column">Actual Amt</th>
                        <th class="column">SGST%</th>
                        <th class="column">SGST</th>
                        <th class="column">CGST%</th>
                        <th class="column">CGST</th>
                        <th class="column">Amount</th>
                    </tr>
                </table>
                    <div>
                    <table class="table">
                        <?php
                
             
                            $sql = "SELECT * FROM salesitem WHERE Sales_ID='$SalesId'";

                            $result = $con->query($sql);
                            if($result->num_rows > 0){
                                
                                while($row = $result->fetch_assoc()){
                    
                                $ItemName = $row["Item_Name"];
                                $BatchNo = $row["Batch_No"];
                                $Quantity = $row["Quantity"];
                                $Rate = $row["Rate"];
                                $Discount = $row["Discount"];
                                $ActualAmt = $row["Actual_Amount"];
                                $SGSTRate = $row["SGSTRate"];
                                $SGSTAmount = $row["SGSTAmount"];
                                $CGSTRate = $row["CGSTRate"];
                                $CGSTAmount = $row["CGSTAmount"];
                                $Amount = $row["Amount"];
                                
                            

                    
                        ?>
                        <tr>
                            <td><input type="text" name="ItemName" id="ItemName" class="input"  value="<?php echo $ItemName; ?>"></td>
                            <td class="column"><input type="text" name="BatchNo" id="BatchNo" class="input" value="<?php echo $BatchNo; ?>"></td>
                            <td class="column"><input type="text" name="Quantity" id="Quantity" class="input" value="<?php echo $Quantity; ?>"></td>
                            <td class="column"><input type="text" name="Rate" id="Rate" class="input" value="<?php echo $Rate; ?>"></td>
                            <td class="column"><input type="text" name="Discount" id="Discount" class="input" value="<?php echo $Discount; ?>"></td>
                            <td class="column"><input type="text" name="ActualAmt" id="ActualAmt" class="input" value="<?php echo $ActualAmt; ?>"></td>
                            <td class="column"><input type="text" name="SGSTP" id="SGSTP" class="input" value="<?php echo $SGSTRate; ?>"></td>
                            <td class="column"><input type="text" name="SGST" id="SGST" class="input" value="<?php echo $SGSTAmount; ?>"></td>
                            <td class="column"><input type="text" name="CGSTP" id="CGSTP" class="input" value="<?php echo $CGSTRate; ?>"></td>
                            <td class="column"><input type="text" name="CGST" id="CGST" class="input" value="<?php echo $CGSTAmount; ?>"></td>
                            <td class="column"><input type="text" name="Amount" id="Amount" class="input" value="<?php echo $Amount; ?>"></td>
                        </tr>
                       <?php
                            }
                        }
                       
                       ?>
                    </table>
                    </div>
                    <div>
                    <table class="table"> 
                        <tr>
                            <th class="column">Total Amount</th>
                            <td><input type="text" name="TotalAmount" id="TotalAmount" class="inputamount"  value="<?php echo $TotalAmount; ?>" readonly></td>
                        </tr>
                        <tr>
                            <th class="column">pay Amount</th>
                            <td><input type="text" name="PayAmount" id="PayAmount" class="inputamount"  value="<?php echo $PayAmount; ?>" required></td>
                        </tr>
                        <tr>
                            <th class="column">Dues Amount</th>
                            <td><input type="text" name="DuesAmount" id="DuesAmount" class="inputamount"  value="<?php echo $DuesAmount; ?>" readonly></td>
                        </tr>   
                    </table>
                </div>
            <?php

            }
            ?>
                
                <div>
                    <table class="table"> 
                        <tr>
                            <td class="column"><input type="submit" value="Update" class="button"></td>
                            <td class="column"><button class="button"><a href='DeleteSales.php?id=<?php echo $SalesId; ?>'>Delete</a></button></td>
                        </tr>
                    </table>
                </div>
        </form>
    </div>
    <div>
        <?php include 'Footer.php' ?>
    </div>
</body>
</html>