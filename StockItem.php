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
                        </td>
                    </tr>
                
                    <tr>
                    <th class="column">Create New Under</th>
                    <td class="column">
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
                        </td>
                    </tr>
                    <tr>
                        <th class="column">Standard Rate</th>
                        <td class="column"><input type="text" name="StandardRate" id="StandardRate" class="inputs" required></td>
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
                    <caption class="Item">Opening Amount</caption>
                    <tr>
                        <th class="column">Quantity</th>
                        <td class="column"><input type="text" name="Quantity" id="Quantity" class="inputs"></td>
                    </tr>
                    <tr>               
                        <th class="column">Rate</th>
                        <td class="column"><input type="text" name="Rate" id="Rate" class="inputs"></td>
                    </tr>
                    <tr>
                        <th class="column">Amount</th>
                        <td class="column"><input type="text" name="Amount" id="Amount" class="inputs" onclick="amount()" readonly></td>
                        
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
                                <th class="column">Name</th>
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

            // When the user clicks on the button, open the modal
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