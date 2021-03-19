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
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <td class="column"><input name="Date" id="Date" class="inputs" onclick="dates()">
                    </tr>
                    <tr>
                        <th class="column">Item ID</th>
                        <td class="column"><input type="text" name="ItemId" id="ItemId" class="inputs" value="<?php echo $ItemId; ?>"></td>
                    </tr>
                    <tr>
                        <th class="column">Item Name</th>
                        <td class="column"><input type="text" name="ItemName" id="ItemName" class="inputs"></td>
                    </tr>
                    <tr>
                        <th class="column">Under</th>
                        <td class="column"><input type="text" name="Under" id="Under" class="inputs"></td>
                    </tr>
                    <tr>
                        <th class="column">Unit</th>
                        <td class="column"><select name="Unit" id="Unit" class="inputs">
                            <option value="None">None</option>
                            <option value="stripts">stripts</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Botal">Botal</option>
                            <option value="Drops">Drops</option>
                            <option value="vile">Vile</option>
                            <option value="syrup">Syrup</option>
                        </select></td>
                    </tr>
                    <tr>
                        <th class="column">Composition Name</th>
                        <td class="column"><input type="text" name="Composition" id="Composition" class="inputs"></td>
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
        </script>
    </body>
</html>