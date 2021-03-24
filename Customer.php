



<?php
    include 'Connect.php';

    $CustomerId = NULL;
    $sql ="SELECT Customer_ID FROM customer order by Customer_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $CustomerId = $row["Customer_ID"];
        $CustomerId = substr($CustomerId, 1);
        $CustomerId = $CustomerId + 1;
        if($CustomerId < 10)
        {
            $CustomerId = "C0000$CustomerId";
           
        } 
        else
        {
            $CustomerId = "C000$CustomerId";   
        }
        
    }
    else
    {
        $CustomerId = "C00001";
    }
    

$con->close();
?>
<html>
    <head>
        <title>Staff Info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
    <div>
        <?php include 'Header.php'?>
    </div>
        <div>
            <form action="Customerconnection.php" method="POST">
            <h1 class="h">Customer Info Form</h1>
                <table class="table">
                    <tr>
                        <th class="column">Customer ID</th>
                        <td class="column"><input type="text" name="CustomerId" id="CustomerId" class="inputs" value="<?php echo $CustomerId; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date" class="inputs" onclick="dates()" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Patient Name</th>
                        <td class="column"><input type="text" name="PatientName" id="PatientName" class="inputs" required></td>
                    </tr>

                    <tr>
                        <th class="column">Patient Age</th>
                        <td class="column"><input type="text" name="PatientAge" id="PatientAge" class="inputs"  maxlength="3" required></td>
                    </tr>
                    <tr>
                        <th class="column">Gender</th>
                        <td class="column"><select name="Gender" id="Gender" class="inputs" required>
                            <option value="None">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="column">Customer Name</th>
                        <td class="column"><input type="text" name="CustomerName" id="CustomerName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">Mobile No.</th>
                        <td class="column"><input type="text" name="MobileNo" id="MobileNo" class="inputs" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <th class="column">Village Name</th>
                        <td class="column"><input type="text" name="VillageName" id="VillageName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">State Name</th>
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
                        <th>City Name</th>
                        <td><select name="CityName" id="CityName" class="inputs" required>
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
                        <th class="column"><input type="submit" value="Create Customer" class="button"></th>
            
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