
<?php    
    include 'Connect.php';

    $SalesId = NULL;
    $sql ="SELECT Sales_ID FROM sales order by Sales_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $SalesId = $row["Sales_ID"];
        $SalesId = substr($SalesId, 1);
        $SalesId = $SalesId + 1;
        if($SalesId < 10)
        {
            $SalesId = "S0000$SalesId";
           
        } 
        else
        {
            $SalesId = "S000$SalesId";   
        }
        
    }
    else
    {
        $SalesId = "S00001";
    }
    

$con->close();
?>
<html>
    <head>
        <title>Sales Item</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
    <div>
        <?php include 'header1.php'?>
    </div>
    <div>
        <?php include 'Menu2.php'?>
    </div>
        <div class="divs"> 
            <form action="Salesconnection.php" method="POST">
                <div>
                <h1 class="h">Sales Info Form</h1>
                    <table class="table">
                        <tr>
                            <th class="column">Sales ID</th>
                            <td class="column"><input type="text"  name="SalesId" id="SalesId" class="input" value="<?php echo $SalesId; ?>" readonly></td>
                            <th class="column">Date</th>
                            <td class="column"><input type="text" name="Date" id="Date" class="input" onclick="dates()" readonly></td>
                        </tr>
                        <tr>
                            <th class="column">Customer ID</th>
                            <td class="column"><input type="text" list="Ids" name="CustomerId" id="CustomerId" class="input" required>
                                <datalist id="Ids">
                                <?php
                                include 'Connect.php';

                                $sql = "SELECT * FROM customer";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row= $result->fetch_assoc()){
                                        $customerid = $row["Customer_ID"];
                                        echo "<option value=".$customerid."></option>";
                                    }
                                }
                                ?>
                                </datalist>
                            </td>
                            <th class="column">Mode</th>
                            <td>
                                <select name="Mode" id="Mode" class="input" required>
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
                            <th class="column">Action</th>
                        </tr>
                    </table>
                    <table class="table" id="dataTable">
                        <tr>
                            <td><input type="text" list="ItemNames" name="ItemName" id="ItemName" class="input" required>
                                <datalist id="ItemNames">
                                <?php
                                include 'Connect.php';

                                $sql = "SELECT * FROM stockItem";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row= $result->fetch_assoc()){
                                        $ItemName = $row["Item_Name"];
                                        echo "<option value=".$ItemName."></option>";
                                    }
                                }
                                ?>
                                </datalist>
                            </td>
                            <td class="column"><input type="text" list="Batch" name="BatchNo" id="BatchNo" class="input" required>
                                <datalist id="Batch">
                                <?php
                                include 'Connect.php';

                                $sql = "SELECT * FROM calculation";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row= $result->fetch_assoc()){
                                        $Batch = $row["Batch_No"];
                                        echo "<option value=".$Batch."></option>";
                                    }
                                }
                                ?>
                                </datalist>
                            </td>
                            <td class="column"><input type="text" name="Expirydate" id="Expirydate" class="input" required></td>
                            <td class="column"><input type="text" name="Quantity" id="Quantity" class="input" required></td>
                            <td class="column"><input type="text" name="Rate" id="Rate" class="input" required></td>
                            <td class="column"><input type="text" name="Discount" id="Discount" class="input" required></td>
                            <td class="column"><input type="text" name="ActualAmt" id="ActualAmt" class="input" onclick="amount()" required></td>
                            <td class="column"><input type="text" name="SGSTP" id="SGSTP" class="input" onclick="gst()" required></td>
                            <td class="column"><input type="text" name="SGST" id="SGST" class="input" required></td>
                            <td class="column"><input type="text" name="CGSTP" id="CGSTP" class="input" required></td>
                            <td class="column"><input type="text" name="CGST" id="CGST" class="input" required></td>
                            <td class="column"><input type="text" name="Amount" id="Amount" class="input" required></td>
                            <td class="column"><input type="button" value="+" id="add" class="input"></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="table"> 
                        <tr>
                            <th class="column">Total Amount</th>
                            <td><input type="text" name="TotalAmount" id="TotalAmount" class="inputamount"readonly></td>
                        </tr>
                        <tr>
                            <th class="column">pay Amount</th>
                            <td><input type="text" name="PayAmount" id="PayAmount" class="inputamount" required></td>
                        </tr>
                        <tr>
                            <th class="column">Dues Amount</th>
                            <td><input type="text" name="DuesAmount" id="DuesAmount" class="inputamount" onclick="substract()" readonly></td>
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
            <?php include 'footer.php'?>
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
                var d=Number(document.getElementById('Discount').value);
                var b=Number(document.getElementById('Rate').value);
                Amt=b-d;
                c=Amt*a;
                document.getElementById('ActualAmt').value=Amt;
                document.getElementById('Amount').value=c;
                document.getElementById('TotalAmount').value=c;
            }

            function substract() {
            
                var a=Number(document.getElementById('TotalAmount').value);
                var b=Number(document.getElementById('PayAmount').value);
                c=a-b;
                document.getElementById('DuesAmount').value=c;
            }

            function gst() {
                var a=Number( document.getElementById('ActualAmt').value);
                var b=Number(document.getElementById('Quantity').value);
                tax=5;
                taxp=tax/2;
                //divideTax=(tax*100)/(tax+100);
                divide=(a*tax)/100;
                divideTax=divide*b;
                taxes=divideTax/2;
                document.getElementById('SGST').value=taxes.toFixed(2);
                document.getElementById('CGST').value=taxes.toFixed(2);
                document.getElementById('SGSTP').value=taxp;
                document.getElementById('CGSTP').value=taxp;
            }

            $(document).ready(function(){
                var html = '<tr><td><input type="text" list="ItemNames" name="ItemName[]" id="ItemName" class="input" required></td><td class="column"><input type="text" name="BatchNo[]" id="BatchNo" class="input" required></td><td class="column"><input type="text" name="Expirydate[]" id="Expirydate" class="input" required></td><td class="column"><input type="text" name="Quantity[]" id="Quantity" class="input" required></td><td class="column"><input type="text" name="Rate[]" id="Rate" class="input" required></td><td class="column"><input type="text" name="Discount[]" id="Discount" class="input" required></td><td class="column"><input type="text" name="ActualAmt[]" id="ActualAmt" class="input" onclick="amount()"></td><td class="column"><input type="text" name="SGSTP[]" id="SGSTP" class="input" onclick="gst()"></td><td class="column"><input type="text" name="SGST[]" id="SGST" class="input" required></td><td class="column"><input type="text" name="CGSTP[]" id="CGSTP" class="input" required></td><td class="column"><input type="text" name="CGST[]" id="CGST" class="input" required></td><td class="column"><input type="text" name="Amount[]" id="Amount" class="input" required></td><td class="column"><input type="button" value="-" id="remove" class="input"></td></tr>';

                $("#add").click(function(){
			    $("#dataTable").append(html);
		        });

		        $("#dataTable").on('click','#remove',function(){
			    $(this).closest('tr').remove();
		        });
            });
        </script>
    </body>

</html>