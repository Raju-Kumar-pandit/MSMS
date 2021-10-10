
<html>
    <head>
        <title>Receive Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <h1 class="h">Edit Receive Payment</h1>
            <table>
                <tr>
                    <td>
                    <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="input">
                    <datalist id="Searchid">
                    <?php
                    include 'Connect.php';

                        $sql = "SELECT * FROM customer";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $CustomerId = $row["Customer_ID"];
                                echo "<option value=".$CustomerId."></option>";
                            }
                        }
                    ?>
                    </datalist>
                    </td>
                    <td><input type="submit" name="id" value="Search" class="input"></td> 
                </tr>
            </table>
            </form>
            <form action="ModifyReceivePayment.php" method="POST">
                <?php

                    include 'Connect.php';
                    if(isset($_POST['id'])){
                        $customerid = $_POST['SearchId'];
                        $sql = "SELECT * FROM receivepayment WHERE Customer_ID='$customerid'";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            $row= $result->fetch_assoc();
                            $PaymentId = $row["Payment_ID"];
                            $Customerid = $row["Customer_ID"];
                            
                            $Date = $row["Date"];
                            $Mode = $row["Mode"];
                            $DuesAmount = $row["Dues_Amount"];
                            $PayAmount = $row["Pay_Amount"];
                            $CurrentDuesAmount = $row["Current_Dues_Amount"];
                ?>
            <table class="table">
                <tr>
                    <th class="column">Payment ID</th>
                    <td class="column"><input type="text" name="PaymentId" id="PaymentId" class="input" value="<?php echo $PaymentId; ?>" readonly></td>
                    <th class="column">Date</th>
                    <td class="column"><input type="text" name="Date" id="Date" class="input"  value="<?php echo $Date; ?>" readonly></td>
                </tr>
                <tr>
                    <th class="column">Cutomer ID</th>
                    <td class="column"><input type="text" name="CustomerId" id="CustomerId" class="input"  value="<?php echo $Customerid; ?>" required></td>
                    <th class="column">Mode</th>
                    <td class="column"><input type="text" name="Mode" id="Mode" class="input"  value="<?php echo $Mode; ?>" required></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <th class="column">Dues Amount</th>

                    <td><input type="text" name="DuesAmount" id="DuesAmount" class="inputamount"  value="<?php echo $DuesAmount; ?>" ></td>
                </tr>
                <tr>
                    <th class="column">Pay Amount</th>
                    <td><input type="text" name="PayAmount" id="PayAmount" class="inputamount"  value="<?php echo $PayAmount; ?>" required></td>     
                </tr>
                <tr>
                    <th class="column">Current Dues Amount</th>
                    <td><input type="text" name="CurrentDuesAmount" id="CurrentDuesAmount" class="inputamount"   value="<?php echo $CurrentDuesAmount; ?>" readonly></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <td class="column"><input type="submit" value="Update" class="button"></td>
                    <td class="column"><button class="button"><a href='DeleteReceivePayment.php?id=<?php echo $row['Payment_ID']; ?>'>Delete</a></button></td>
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