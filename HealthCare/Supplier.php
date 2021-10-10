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
        <?php include 'header1.php'?>
    </div>
    <div>
        <?php include 'Menu1.php'?>
    </div>
        <div class="divs">
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
                    <th class="column">State Name</th>
                        <td class="column"><input type="text" list="id" name="StateName" id="StateName" class="inputs" required>
                        <datalist id="id">
                            <?php
                            include 'Connect.php';

                                $sql = "SELECT * FROM state";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row= $result->fetch_array()){
                                        $state = $row["State_Name"];
                                        echo "<option value='$state'></option>";
                                    }
                                }
                                $con->close();
                            ?>
                        </datalist>
                        </td>
                    </tr>
                    <tr>
                        <th class="column">City Name</th>
                        <td class="column"><input type="text" name="CityName" list="Id" id="CityName" class="inputs" required>
                        <datalist id="Id">
                            <?php
                            include 'Connect.php';

                                $sql = "SELECT * FROM DistrictName";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row= $result->fetch_array()){
                                        $CityName = $row["District_Name"];
                                        echo "<option value='$CityName'></option>";
                                    }
                                }
                            ?>
                        </datalist>
                        </td>
                    </tr>
                   
                </table>
                <table class="table">
                    <tr>
                        <th class="column"><input type="submit" value="Create Supplier" class="button"></th>
            
                    </tr>
                </table>
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
        </script>
    </body>
</html>
