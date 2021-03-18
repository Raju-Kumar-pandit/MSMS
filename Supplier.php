<?php
      
    include 'Connect.php';

    $SupplierId = NULL;
    $sql = "SELECT Supplier_ID FROM supplier order by Supplier_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $SupplierId = $row["Supplier_ID"];
        $SupplierId = substr($SupplierId, 1);
        $SupplierId = $SupplierId + 1;
        if($SupplierId < 10)
        {
            $SupplierId = "S0000$SupplierId";
           
        } 
        else
        {
            $SupplierId = "S000$Supplierid";   
        }
        
    }
    else
    {
        $SupplierId = "S00001";
    }
    

    $con->close();
?>
<html>
    <head>
        <title>Supplier Info Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
    <div>
        <?php include 'Header.php'?>
    </div>
        <div>
            <form action="Supplierconnection.php" method="POST">
            <h1 class="h">Supplier Info Form</h1>
                <table class="table">
                    <tr>
                        <th class="column">Supplier ID</th>
                        <td class="column"><input type="text" name="SupplierId" id="SupplierId" class="inputs" value="<?php echo $SupplierId; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date" class="inputs" onclick="dates()" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Supplier Name</th>
                        <td class="column"><input type="text" name="SupplierName" id="SupplierName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">Shop Name</th>
                        <td class="column"><input type="text" name="ShopName" id="ShopName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">Mobile No.</th>
                        <td class="column"><input type="text" name="MobileNo" id="MobileNo" class="inputs" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <th class="column">Email ID</th>
                        <td class="column"><input type="email" name="EmailId" id="EmailId" class="emails" required></td>
                    </tr>
                    <tr>
                        <th class="column">Place Name</th>
                        <td class="column"><input type="text" name="PlaceName" id="PlaceName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">State Nmae</th>
                        <td class="column"><select name="StateName" id="StateName" class="inputs" required>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Gujrat">Gujrat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Manipur">Manipur</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="column">City Name</th>
                        <td class="column"><select name="CityName" id="CityName" class="inputs" required>
                        <option value="Arwal">Arwal</option>
                        <option value="Bhagalpur">Bhagalpur</option>
                        <option value="Bhojpur">Bhojpur</option>
                        <option value="Muzaffarpur">Muzaffarpur</option>
                        <option value="Nalanda">Nalanda</option>
                        <option value="Patna">Patna</option>
                        <option value="Vaishali">Vaishali</option>
                        </select>
                        </td>
                    </tr>
                   
                </table>
                <table class="table">
                    <tr>
                        <th class="column"><input type="submit" value="Submit" class="button"></th>
            
                    </tr>
                </table>
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
        </script>
    </body>
</html>
