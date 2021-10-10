<html>
    <head>
        <title>Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'header1.php' ?>
        </div>
        <div>
            <?php include 'Menu1.php'?>
        </div>
        <div class="divs">
        <form action="" method="post">
        <h1 class="h">Edit Payment form</h1>
        <table>
            <tr>
                <td>
                <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="input">
                <datalist id="Searchid">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM supplier";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $SupplierId = $row["Supplier_ID"];
                            echo "<option value=".$SupplierId."></option>";
                        }
                    }
                ?>

                </datalist>
                </td>
                <td><input type="submit" name="id" value="Search" class="input"></td> 
            </tr>
        </table>
        </form>
            <form action="ModifyPayment.php" method="POST">
                
            <table class="table">
            <?php
                include 'Connect.php';
                if(isset($_POST['id'])){
                    $supplierid = $_POST['SearchId'];
                    $sql = "SELECT * FROM payment  WHERE Supplier_ID='$supplierid'";    
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            $row= $result->fetch_assoc();
                            $SupplierId = $row["Supplier_ID"];
                            $PaymentId = $row["Payment_ID"];
                            $Date = $row["Date"];
                            $Mode = $row["Mode"];
                            $DuesAmount = $row["Dues_Amount"];
                            $PayAmount = $row["Pay_Amount"];
                            $CurrentDuesAmount = $row["Current_Dues_Amount"];
                            
                ?>
                <tr>
                    <th class="column">Payment ID</th>
                    <td class="column"><input type="text" name="PaymentId" id="PaymentId" class="input" value="<?php echo $PaymentId; ?>" readonly></td>
                    <th class="column">Date</th>
                    <td class="column"><input type="text" name="Date" id="Date" class="input" value="<?php echo $Date; ?>"  readonly></td>
                </tr>
                
                <tr>
                    <th class="column">Supplier ID</th>
                    <td class="column"><input type="text" list="Ids" name="SupplierId" id="SupplierId" class="input"  value="<?php echo $SupplierId;?>" readonly>
                    </td>
                    <th class="column">Mode</th>
                    <td class="column"><input type="text" name="Mode" id="Mode" class="input" value="<?php echo $Mode; ?>" required></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <th class="column">Dues Amount</th>
                    <td><input type="text" list="ids" name="DuesAmount" id="DuesAmount" class="inputamount"value="<?php echo $DuesAmount; ?>" required></td>
                </tr>
                <tr>
                    <th class="column">Pay Amount</th>
                    <td><input type="text" name="PayAmount" id="PayAmount" class="inputamount" value="<?php echo $PayAmount; ?>" required></td>     
                </tr>
                <tr>
                    <th class="column">Current Dues Amount</th>
                    <td><input type="text" name="CurrentDuesAmount" id="CurrentDuesAmount" class="inputamount" value="<?php echo $CurrentDuesAmount; ?>" readonly></td>
                </tr>
            
            </table>
            <table class="table">
                <tr>
                    <td class="column"><input type="submit" value="Update" class="button"></td>
                    <td class="column"><button class="Button"><a href='DeletePayment.php?id=<?php echo $row['Payment_ID']; ?>'>Delete</a></button></td>
                </tr>
            </table>
            <?php
            } else {
                echo "<script>alert('Not record found....Please retry')</script>";
            }
        }
        ?>
            </form>
        </div>
        <div>
            <?php include 'footer.php' ?>
        </div>
    </body>
</html>