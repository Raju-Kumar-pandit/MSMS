
<html>
    <head>
        <title>Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'Header.php' ?>
        </div>
        <div>
        <form action="" method="post">
        <h1 class="h">Edit Other Payment form</h1>
        <table class="tables">
            <tr>
                <td class="column">
                <input type="search" name="SearchId" list="Search" id="SearchId" placeholder="Search data....." class="inputs">
                <datalist id="Search">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM otherpayment";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $PaymentId = $row["Payment_ID"];
                            echo "<option value=".$PaymentId."></option>";
                        }
                    }
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="ids" value="Search" class="button"></td> 
            </tr>
        </table>
        </form>
            <form action="ModifyOtherPayment.php" method="POST">
                
            <table class="table">
            <?php
                include 'Connect.php';
                if(isset($_POST['ids'])){
                    $Paymentid = $_POST['SearchId'];
                    $sql = "SELECT * FROM otherpayment  WHERE Payment_ID='$Paymentid'";    
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            $row= $result->fetch_assoc();
                            $LedgerId = $row["ledger_ID"];
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
                    <th class="column">Ledger ID</th>
                    <td class="column"><input type="text" list="Ids" name="LedgerId" id="LedgerId" class="input"  value="<?php echo $LedgerId;?>" readonly>
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
                    <td class="column"><button class="Button"><a href='DeleteOtherPayment.php?id=<?php echo $row['Payment_ID']; ?>'>Delete</a></button></td>
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
            <?php include 'Footer.php' ?>
        </div>
    </body>
</html>