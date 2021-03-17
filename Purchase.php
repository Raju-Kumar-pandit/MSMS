<?php
    include 'Connect.php';

    $PurchaseId = NULL;
    $sql ="SELECT Purchase_ID FROM purchase order by Purchase_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $PurchaseId = $row["Purchase_ID"];
        $PurchaseId = substr($PurchaseId, 1);
        $PurchaseId = $PurchaseId + 1;
        if($PurchaseId < 10)
        {
            $PurchaseId = "P0000$PurchaseId";
           
        } 
        else
        {
            $PurchaseId = "P000$PurchaseId";   
        }
        
    }
    else
    {
        $PurchaseId = "P00001";
    }
    

$con->close();
?>
<html>
    <head>
        <title>Purchase Item</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
    <div>
        <?php include 'Header.php'?>
    </div>
        <div>
            <form action="Purchaseconnection.php" method="POST">
            <h1 class="h">Purchase Info Form</h1>
                <div>
                    <table class="table">
                    <tr>
                        <th class="column">Purchase ID</th>
                        <td class="column"><input type="text" name="PurchaseId" id="PurchaseId"  class="input" value="<?php echo $PurchaseId; ?>" ></td>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date"  class="input" onclick="dates()" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Supplier ID</th>
                        <td class="column"><input type="text" name="SupplierId" id="SupplierId"  class="input"></td>
                        <th class="column">Mode</th>
                        <td>
                            <select name="Mode" id="Mode"  class="input">
                                <option value="None">None</option>
                                <option value="Cash">Cash</option>
                                <option value="Credit">Credit</option>
                            </select>
                        </td>
                    </tr>
                    </table>
                </div>
                <div>
                    <table class="table">
                        <tr>
                            <th>Item Name</th>
                            <th class="column">Batch No.</th>
                            <th class="column">Quantity</th>
                            <th class="column">Rate</th>
                            <th class="column">Output GST</th>
                            <th class="column">Dicount</th>
                            <th class="column">Amount</th>
                        </tr>
                        <tr>
                            <td><input type="text"  name="ItemName" id="ItemName"  class="input"></td>
                            <td class="column"><input type="text"  name="BatchNo" id="BatchNo"  class="input"></td>
                            <td class="column"><input type="text"  name="Quantity" id="Quantity"  class="input"></td>
                            <td class="column"><input type="text"  name="Rate" id="Rate"  class="input"></td>
                            <td class="column"><input type="text"  name="OutputGST" id="OutputGST"  class="input"></td>
                            <td class="column"><input type="text"  name="Discount" id="Discount"  class="input"></td>
                            <td class="column"><input type="text"  name="Amount" id="Amount"  class="input" onclick="amount()"></td>
                        </tr>
                       
                    </table>
                </div>
                <div>
                    <table class="table"> 
                        <tr>
                            <th class="column">Total Amount</th>
                            <td><input type="text" name="TotalAmount" id="TotalAmount" class="inputamount"></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="table"> 
                        <tr>
                            <th class="column">pay Amount</th>
                            <td><input type="text" name="PayAmount" id="PayAmount" class="inputamount"></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="table"> 
                        <tr>
                            <td class="column"><input type="submit" value="Submit" class="button"></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <div>
            <?php include 'Footer.php'?>
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

            function amount() {
            
                var a=Number(document.getElementById('Quantity').value);
                var b=Number(document.getElementById('Rate').value);
                c=a*b;
                document.getElementById('Amount').value=c;
                document.getElementById('TotalAmount').value=c;
            }
        </script>
    </body>

</html>