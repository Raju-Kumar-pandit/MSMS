<?php
    include 'Connect.php';

    $ReturnId = NULL;
    $sql ="SELECT Return_ID FROM returnsItem order by Return_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $ReturnId = $row["Return_ID"];
        $ReturnId = substr($ReturnId, 1);
        $ReturnId = $ReturnId + 1;
        if($ReturnId < 10)
        {
            $ReturnId = "R0000$ReturnId";
           
        } 
        else
        {
            $ReturnId = "R000$ReturnId";   
        }
        
    }
    else
    {
        $ReturnId = "R00001";
    }
    

$con->close();
?>
<html>
    <head>
        <title>Returns Item</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
    <div>
        <?php include 'Header.php'?>
    </div>
        <div>
            <form action="ReturnItemconnection.php" method="POST">
            <h1 class="h">Returns Info Form</h1>
                <div>
                    <table class="table">
                    <tr>
                        <th class="column">Returns ID</th>
                        <td class="column"><input type="text" name="ReturnId" id="ReturnId" class="input" value="<?php echo $ReturnId; ?>" readonly></td>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date" class="input" onclick="dates()" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Supplier ID</th>
                        <td class="column"><input type="text" list="ids" name="SupplierId" id="SupplierId" class="input">
                        <datalist id="ids">
                            <?php
                            
                                include 'Connect.php';
                                $sql = "SELECT * FROM supplier";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row=$result->fetch_assoc()){
                                        $supplierid = $row['Supplier_ID'];
                                        echo "<option value='$supplierid'></option>";
                                    }
                                }
                            ?>
                            </datalist>
                        </td>
                        <th class="column">Mode</th>
                        <td>
                            <select name="Mode" id="Mode" class="input">
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
                        </tr>
                    </table>
                    <table class="table" id="datatable">
                        <tr>
                            <td><input type="text" list="id" name="ItemName" id="ItemName" class="input">
                            <datalist id="id">
                            <?php
                                
                                include 'Connect.php';
                                $sql = "SELECT * FROM stockItem";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row=$result->fetch_assoc()){
                                        $itemName = $row['Item_Name'];
                                        echo "<option value='$itemName'></option>";
                                    }
                                }
                            ?>
                            </datalist>
                            </td>
                            <td class="column"><input type="text" name="BatchNo" id="BatchNo" class="input"></td>
                            <td class="column"><input type="text" name="Expirydate" id="Expirydate" class="input"></td>
                            <td class="column"><input type="text" name="Quantity" id="Quantity" class="input"></td>
                            <td class="column"><input type="text" name="Rate" id="Rate" class="input"></td>
                            <td class="column"><input type="text" name="Discount" id="Discount" class="input"></td>
                            <td class="column"><input type="text" name="ActualAmt" id="ActualAmt" class="input" onclick="amount()"></td>
                            <td class="column"><input type="text" name="SGSTP" id="SGSTP" class="input" onclick="gst()"></td>
                            <td class="column"><input type="text" name="SGST" id="SGST" class="input"></td>
                            <td class="column"><input type="text" name="CGSTP" id="CGSTP" class="input"></td>
                            <td class="column"><input type="text" name="CGST" id="CGST" class="input"></td>
                            <td class="column"><input type="text" name="Amount" id="Amount" class="input" onclick="amount()"></td>
                        </tr>
                       
                    </table>
                    <table>
                        <tr>
                            <td>
                                <input type="button" value="Append Segment" onClick="addRow('dataTable')" > 
                            </td>
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
                            <th class="column">Dues Amount</th>
                            <td><input type="text" name="DuesAmount" id="DuesAmount" class="inputamount" onclick="substract()"></td>
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