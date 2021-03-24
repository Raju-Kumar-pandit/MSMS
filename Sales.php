
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
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates(), amount()">
    <div>
        <?php include 'Header.php'?>
    </div>
        <div>
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
                            <td class="column"><input type="text" list="Ids" name="CustomerId" id="CustomerId" class="input">
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
                            <th class="column">Quantity</th>
                            <th class="column">Rate</th>
                            <th class="column">Input GST</th>
                            <th class="column">Dicount</th>
                            <th class="column">Amount</th>
                        </tr>
                    </table>
                    <table class="table" id="dataTable">
                        <tr><td><input type="text" list="ItemNames" name="ItemName" id="ItemName" class="input">
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
                            <td class="column"><input type="text" name="BatchNo" id="BatchNo" class="input"></td>
                            <td class="column"><input type="text" name="Quantity" id="Quantity" class="input"></td>
                            <td class="column"><input type="text" name="Rate" id="Rate" class="input"></td>
                            <td class="column"><input type="text" name="InputGST" id="InputGST" class="input"></td>
                            <td class="column"><input type="text" name="Discount" id="Discount" class="input"></td>
                            <td class="column"><input type="text" name="Amount" id="Amount" class="input" onclick="amount()"></td>
                        </tr>
                       
                    </table>
                    <table>
                        <tr>
                            <td>
                                <input type="button" value="Append Segment" onClick="addRow('dataTable')" /> 
                            </td>
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

            function substract() {
            
                var a=Number(document.getElementById('TotalAmount').value);
                var b=Number(document.getElementById('PayAmount').value);
                c=a-b;
                document.getElementById('DuesAmount').value=c;
            }

            function addRow(tableID) {
                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
                if(rowCount < 10){                         
                    var row = table.insertRow(rowCount);
                    var colCount = table.rows[0].cells.length;
                    for(var i=0; i<colCount; i++) {
                        var newcell = row.insertCell(i);
                        newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                        newcell.name = newcell.name + i+1;
                    }
                row.cells[2].children[0].value ;            
                }else{
                    alert("Maximum Number of Segments is 10.");
                }
            }
        </script>
    </body>

</html>