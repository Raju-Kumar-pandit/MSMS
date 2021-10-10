
<html>
    <head>
        <title>Returns Item</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
    <div>
        <?php include 'header1.php'?>
    </div>
    <div>
        <?php include 'Menu2.php'?>
    </div>
        <div class="divs">
            <form action="" method="POST">
            <h1 class="h">Returns</h1>
                <table>
                    <tr>
                        <td><input type="search" list="ids" name="Searchid" id="Searchid" placeholder="Search data......" class="input">
                        <datalist id="ids">
                            <?php
                                include 'Connect.php';
                                $sql = "SELECT * FROM returnsItem";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row=$result->fetch_assoc()){
                                        $ReturnId = $row['Return_ID'];
                                        echo "<option value='$ReturnId'></option>";
                                    }
                                }
                            ?>
                        </datalist>
                        </td>
                        <td><input type="submit" name="id" value="Search" class="input"></td>
                    </tr>
                </table>
            </form>
            <form action="ModifyReturnItem.php" method="POST">
                <div>
                    <?php
                        include 'Connect.php';
                    if(isset($_POST["id"])){
                        $ReturnId = $_POST["Searchid"];
                        $sql = "SELECT * FROM returnsItem WHERE Return_ID='$ReturnId'";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            $row=$result->fetch_assoc();
                            $ReturnId = $row['Return_ID'];
                            $Date = $row['Date'];
                            $SupplierId = $row['Supplier_ID'];
                            $Mode = $row['Mode'];
                            $TotalAmount = $row['Total_Amount'];
                            $DuesAmount = $row['Dues_Amount'];
                            
                    ?>
                    <table class="table">
                    <tr>
                        <th class="column">Returns ID</th>
                        <td class="column"><input type="text" name="ReturnId" id="ReturnId" class="input" value="<?php echo $ReturnId; ?>" readonly></td>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date" class="input" value="<?php echo $Date; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Supplier ID</th>
                        <td class="column"><input type="text" name="SupplierId" id="SupplierId" class="input" value="<?php echo $SupplierId; ?>"></td>
                        <th class="column">Mode</th>
                        <td class="column"><input type="text" name="Mode" id="Mode" class="input" value="<?php echo $Mode; ?>"></td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table class="table">
                        <tr>
                            <th class="Item">Item Name</th>
                            <th class="column">Batch No.</th>
                            <th class="column">Expiry Date</th>
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
                    <table class="table">
                        <tr>
                        <?php
                            $sql = "SELECT * FROM returnItems WHERE Return_ID='$ReturnId'";
                            $result = $con->query($sql);
                            if($result->num_rows > 0){
                                $row=$result->fetch_assoc();
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
                                $Expirydate = $row["Expiry_Date"];
                    
                        ?>
                            <td><input type="text" name="ItemName" id="ItemName" class="input" value="<?php echo $ItemName; ?>"></td>
                            <td class="column"><input type="text" name="BatchNo" id="BatchNo" class="input" value="<?php echo $BatchNo; ?>"></td>
                            <td class="column"><input type="text" name="Expirydate" id="Expirydate" class="input" value="<?php echo $Expirydate; ?>"></td>
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
                        } else {
                            echo "<script>alert('Data is Empty')</script>";
                        }
                       ?>
                    </table>
                </div>
                <div>
                    <table class="table"> 
                        <tr>
                            <th class="column">Total Amount</th>
                            <td><input type="text" name="TotalAmount" id="TotalAmount" class="inputamount" value="<?php echo $TotalAmount; ?>"></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="table"> 
                        <tr>
                            <th class="column">Dues Amount</th>
                            <td><input type="text" name="DuesAmount" id="DuesAmount" class="inputamount" value="<?php echo $DuesAmount; ?>" ></td>
                        </tr>
                    </table>
                </div>
                
                <div>
                    <table class="table"> 
                        <tr>
                            <td class="column"><input type="submit" value="Update" class="button"></td>
                            <td class='column'><button class='button'><a href='DeleteReturnItemsRecord.php?id=<?php echo $row["Return_ID"]; ?>'>Delete</a></button></td>
                        </tr>
                    </table>
                </div>
                <?php
                    
                }
                ?>
            </form>
        </div>
        <div>
            <?php include 'footer.php'?>
        </div>
    </body>

</html>