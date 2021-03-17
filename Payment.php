<?php
    include 'Connect.php';

    $PaymentId = NULL;
    $sql ="SELECT Payment_ID FROM payment order by Payment_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $PaymentId = $row["Payment_ID"];
        $PaymentId = substr($PaymentId, 1);
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
            <?php include 'Header.php' ?>
        </div>
        <div>
            <form action="Paymentconnection.php" method="POST">
                <h1 class="h">Payment form</h1>
            <table class="table">
                <tr>
                    <th class="column">Payment ID</th>
                    <td class="column"><input type="text" name="PaymentId" id="PaymentId" class="input" value="<?php echo $PaymentId ?>"></td>
                    <th class="column">Date</th>
                    <td class="column"><input type="text" name="Date" id="Date" class="input" onclick="dates()" readonly></td>
                </tr>
                <tr>
                    <th class="column">Supplier ID</th>
                    <td class="column"><input type="text" name="Id" id="Id" class="input"></td>
                    <th class="column">Mode</th>
                    <td class="column"><select name="Mode" id="Mode" class="input">
                        <option value="None">None</option>
                        <option value="Cash">Cash</option>
                        <option value="Credit">Credit</option>
                    </select></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <th class="column">Dues Amount</th>
                    <td><input type="text" name="DuesAmount" id="DuesAmount" class="inputamount"></td>
                </tr>
                <tr>
                    <th class="column">Pay Amount</th>
                    <td><input type="text" name="PayAmount" id="PayAmount" class="inputamount"></td>     
                </tr>
                <tr>
                    <th class="column">Current Dues Amount</th>
                    <td><input type="text" name="CurrentDuesAmount" id="CurrentDuesAmount" class="inputamount" onclick="substract()"></td>
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
            <?php include 'Footer.php' ?>
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