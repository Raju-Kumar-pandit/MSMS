<?php
    include 'Connect.php';

    $ItemId = NULL;
    $sql ="SELECT Item_ID FROM stockItem order by Item_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $ItemId = $row["Item_ID"];
        $ItemId = substr($ItemId, 1);
        $ItemId = $ItemId + 1;
        if($ItemId < 10)
        {
            $ItemId = "I0000$ItemId";
           
        } 
        else
        {
            $ItemId = "I000$ItemId";   
        }
        
    }
    else
    {
        $ItemId = "I00001";
    }
    

    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Item</title>
    <link rel="stylesheet" href="colors.css">
</head>
    <body onload="dates()">
        <div>
            <?php include 'Header.php' ?>
        </div>
        <div>
            <form action="StockItemconnection.php" method="POST">
                <h1 class="h">Stock Item Form</h1>
                <table class="table">
                    <tr>
                        <th class="column">Date</th>
                        <td class="column"><input name="Date" id="Date" class="inputs" onclick="dates()" readonly>
                    </tr>
                    <tr>
                        <th class="column">Item ID</th>
                        <td class="column"><input type="text" name="ItemId" id="ItemId" class="inputs" value="<?php echo $ItemId; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Item Name</th>
                        <td class="column"><input type="text" name="ItemName" id="ItemName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">Under</th>
                        <td class="column"><input type="text" list="ids" name="Under" id="Under" class="inputs" required>
                            <datalist id="ids">
                            <?php 
                                include 'Connect.php';
                                $sql = "SELECT * FROM Under";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo "<option value=".$row['Under_Name']."> </option>";
                                        
                                    }
                                }
                            ?>
                            </datalist>
                            <button id="myBtn" class="inputs" type="button">Create</button> 
                        </td>
                    </tr>
                    <tr>
                        <th class="column">Unit</th>
                        <td><input type='text' name="Unit" list="id" id="Unit" class="inputs" required>
                            <datalist id="id">
                                <?php
                                    include 'Connect.php';

                                    $sql = "SELECT * FROM unit";
                                    $result = $con->query($sql);
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_array()){
                                            echo "<option value=".$row['UnitName']."> </option>";
                                        }
                                    }
                                ?>
                            </datalist>
                            <button id="myBtn1" class="inputs" type="button">Create</button>
                        </td>
                    </tr>
                    <tr>
                        <th class="column">Alternate Unit</th>
                        <td class="column">Yes<input type='radio' name="Units" id="Units" required>
                        No<input type='radio' name="Units" id="Units" required></td>
                    </tr>
                    <tr>
                        <th class="column"> GST Rate %</th>
                        <td class="column"><input type="text" name="GSTRate" id="GSTRate" class="inputs"></td>
                    </tr>
                    <tr>
                        <th class="column">Salling Rate</th>
                        <td class="column"><input type="text" name="SaleRate" id="SaleRate" class="inputs"></td>
                    </tr>
                    <tr>
                        <th class="column">Composition Name</th>
                        <td class="column"><input type="text" name="Composition" id="Composition" class="inputs"></td>
                    </tr>
                </table>
                <table class="table">
                    
                    <tr>
                        <th class="column" rowspan="2">Opening Amount</th>
                        <th class="column">Quantity</th>
                        <th class="column">per</th>
                        <th class="column">Rate</th>
                        <th class="column">Amount</th>
                    </tr>
                    <tr>               
                        <td class="column"><input type="text" name="Quantity" id="Quantity" class="input"></td>
                        <td class="column"><input type="text" name="Per" id="Per" class="input"></td>
                        <td class="column"><input type="text" name="Rate" id="Rate" class="input"></td>
                        <td class="column"><input type="text" name="Amount" id="Amount" class="input"></td>
                        <td class="column"><input type="hidden" name="Mfgdate" id="Mfgdate" class="input"></td>
                        <td class="column"><input type="hidden" name="Expirydate" id="Expirydate" class="input"></td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td class="column"><input type="submit" value="Save" class="button"></td>
                    </tr>
                </table>
            </form>
            <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                    <form action="CreateUnder.php" method="POST">
                        <table class="table">
                            <tr>
                                <th class="column">Under Name</th>
                                <td class="column"><input type="text" name="Name" id="Name" class="input"></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td class="column"><input type="submit" value="Submit" name="Submit" class="button"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div> 
            </div>

            <!-- The Modal unit -->
            <div id="myModals1" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                    <form action="Unitconnect.php" method="POST">
                        <table class="table">
                            <tr>
                                <th class="column">Short Name of Unit</th>
                                <td class="column"><input type="text" name="Name" id="Name" class="input"></td>
                            </tr>
                            <tr>
                                <th class="column">Full Name of Unit</th>
                                <td class="column"><input type="text" name="UnitName" id="UnitName" class="input"></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td class="column"><input type="submit" value="Submit" name="Submit" class="button"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div> 
            </div>

            <!-- The Modal2 opening Amount -->
            <div id="myModals" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <div>
                
                        <table class="table">
                            <tr>
                                <th class="column">Batch</th>
                                <th class="column">Mfg Dt.</th>
                                <th class="column">Expiry Dt</th>
                                <th class="column">Quantity</th>
                                <th class="column">Rate</th>
                                <th class="column">per</th>
                                <th class="column">Amount</th>
                                
                            </tr>
                            <tr>
                                <td class="column"><input type="text" name="Batch" id="Batch" class="input"></td>
                                <td class="column"><input type="date" name="Mfgdates" id="Mfgdates" class="input"></td>
                                <td class="column"><input type="date" name="Expirydates" id="Expirydates" class="input"></td>
                                <td class="column"><input type="text" name="Quantities" id="Quantities" class="input"></td>
                                <td class="column"><input type="text" name="Rates" id="Rates" class="input"></td>
                                <td class="column"><input type="text" name="Pers" id="Pers" class="input" ></td>
                                <td class="column"><input type="text" name="Amounts" id="Amounts" class="input" onclick="amount()"></td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td class="column"><input type="button" id="closes" value="Close" class="close" onclick="get()"></td>
                            </tr>
                        </table>
                    
                </div>
            </div> 
            </div>
        </div>
        <div>
            <?php include 'Footer.php' ?>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
            modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }

            // Get the modal
            var modals = document.getElementById("myModals");

            // Get the button that opens the modal
            var btns = document.getElementById("Quantity");

            // Get the <span> element that closes the modal
            var spans = document.getElementsByClassName("close")[2];
           
            // Get the <span> element that closes the modal
            var close = document.getElementsByClassName("closes")[3];

            // When the user clicks the button, open the modal 
            btns.onclick = function() {
            modals.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            spans.onclick = function() {
            modals.style.display = "none";
            }

            // When the user clicks on close nutton close the modal
            close.onclick = function() {
            modals.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modals) {
                modals.style.display = "none";
            }
            }

            // Get the modal
            var modals1 = document.getElementById("myModals1");

            // Get the button that opens the modal
            var btns1 = document.getElementById("myBtn1");

            // Get the <span> element that closes the modal
            var spans1 = document.getElementsByClassName("close")[1];

            // When the user clicks the button, open the modal 
            btns1.onclick = function() {
            modals1.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            spans1.onclick = function() {
            modals1.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modals1) {
                modals1.style.display = "none";
            }
            }

            function dates() {
			var today = new Date();
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0');
			var yyyy = today.getFullYear();
                
			today = yyyy + '/' + mm + '/' + dd;
			document.getElementById('Date').value = today;

			}

            function amount() {
            var a=Number(document.getElementById('Quantities').value);
            var b=Number(document.getElementById('Rates').value);
            
            c=a*b;
            document.getElementById('Amounts').value=c;
            }

            function get(){
            var a=Number(document.getElementById("Quantities").value);
            var b=String(document.getElementById("Pers").value);
            var c=Number(document.getElementById("Rates").value);
            var d=Number(document.getElementById("Amounts").value);
            var e=String(document.getElementById("Mfgdates").value);
            var f=String(document.getElementById("Expirydates").value);
            document.getElementById("Quantity").value=a;
            document.getElementById("Per").value=b;
            document.getElementById("Rate").value=c;
            document.getElementById("Amount").value=d;
            document.getElementById("Mfgdate").value=e;
            document.getElementById("Expirydate").value=f;
            }
            
        </script>
    </body>
</html>


