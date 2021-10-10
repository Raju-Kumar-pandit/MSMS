<?php
    $SupplierId = null;
    include 'Connect.php';

    $PaymentId = NULL;
    $sql ="SELECT Payment_ID FROM otherpayment order by Payment_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $PaymentId = $row["Payment_ID"];
        $PaymentId = substr($PaymentId, 2);
        $PaymentId = $PaymentId + 1;
        if($PaymentId < 10)
        {
            $PaymentId = "PA000$PaymentId";
           
        } 
        else
        {
            $PaymentId = "PA00$PaymentId";   
        }
        
    }
    else
    {
        $PaymentId = "PA0001";
    }
    

    $con->close();
?>
<html>
    <head>
        <title>Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
        <div>
            <?php include 'header1.php' ?>
        </div>
        <div>
            <?php include 'Menu2.php'?>
        </div>
        <div class="divs">
            <form action="OtherPaymentConnect.php" method="POST" id="ledgerPaymentform">
                <h1 class="h">Other Payment form</h1>
            <table class="table">
                <tr>
                    <th class="column">Payment ID</th>
                    <td class="column"><input type="text" name="PaymentId" id="PaymentId" class="input" value="<?php echo $PaymentId ?>" readonly></td>
                    <th class="column">Date</th>
                    <td class="column"><input type="text" name="Date" id="Date" class="input" onclick="dates()" readonly></td>
                </tr>
                <tr>
                    <th class="column">Ledger ID</th>
                    <td class="column"><input type="text" list="Ids" name="LedgerId" id="LedgerId" class="input" onchange="document.getElementById('OtherPaymentform').submit()">
                    <datalist id="Ids">
                    <?php
                    include 'Connect.php';

                        $sql = "SELECT * FROM ledger";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $LedgerId = $row["Ledger_ID"];
                                echo "<option value=".$LedgerId."></option>";
                            }
                        }
                    ?>

                    </datalist> 
                    </td>
                    <th class="column">Mode</th>
                    <td class="column"><select name="Mode" id="Mode" class="input" required>
                        <option value="None">None</option>
                        <option value="Cash">Cash</option>
                        <option value="Credit">Credit</option>
                    </select></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <th class="column">Dues Amount</th>
                    <td><input type="text" list="ids" name="DuesAmount" id="DuesAmount" class="inputamount"  required></td>
                </tr>
                <tr>
                    <th class="column">Pay Amount</th>
                    <td><input type="text" name="PayAmount" id="PayAmount" class="inputamount" required></td>     
                </tr>
                <tr>
                    <th class="column">Current Dues Amount</th>
                    <td><input type="text" name="CurrentDuesAmount" id="CurrentDuesAmount" class="inputamount" onclick="substract()" readonly></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <td class="column"><input type="submit" value="Submit" class="button"></td>
                </tr>
            </table>
            </form>                                                                           
        </div>
        <div>
            <?php include 'footer.php' ?>
        </div>
        <script>
            function dates() {
			var today = new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0');
			var yyyy = today.getFullYear();

			today = yyyy + '/' + mm + '/' + dd;
			document.getElementById('Date').value = today;

            }
            
            function substract() {
            
                var a=Number(document.getElementById('DuesAmount').value);
                var b=Number(document.getElementById('PayAmount').value);
                c=a-b;
                document.getElementById('CurrentDuesAmount').value=c;
            }
        </script>
    </body>
</html>