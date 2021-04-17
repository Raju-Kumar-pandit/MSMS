<?php
    include 'Connect.php';
    $CompanyId = NULL;
    $sql = " SELECT Company_ID FROM companyinfo order by Company_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $CompanyId = $row["Company_ID"];
        $CompanyId = substr($CompanyId, 1);
        $CompanyId = $CompanyId + 1;
        if($CompanyId < 10)
        {
            $CompanyId = "C0000$CompanyId";
        } 
        else 
        {
            $CompanyId = "C000$CompanyId";   
        }
        
    }
    else
    {
        $CompanyId = "C00001";
    }
    $sql = "Select Company_ID from companyinfo";

    $result = $con->query($sql);

    if($result->num_rows>0) {
        echo '<script>window.location.href="Dashbord.php"</script>';
    }

$con->close();
?>

<html>
    <head>
        <title>Create Company</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
        <div>
            <form action="CreateCompany.php" method="POST">
            <h1 class="h">Company Info </h1>
                <table class="table">
                    <tr>
                        <th class="column">Company ID</th>
                        <td class="column"><input type="text" name="CompanyId" id="CompanyId" class="inputs" value="<?php echo $CompanyId; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date" class="inputs" onclick="dates()" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Company Name</th>
                        <td class="column"><input type="text" name="CompanyName" id="CompanyName" class="inputs" required></td>
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
                        <td class="column"><input type="text" list="Id" name="CityName" id="CityName" class="inputs" required>
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
                    <tr>
                        <th class="column">Pin Code</th>
                        <td class="column"><input type="text" name="PinCode" id="PinCode" class="inputs" maxlength="6" required></td>
                    </tr>
                    
                </table>
                <table class="table">
                    <tr>
                        <th class="column"><input type="submit" value="Create Company" class="button"></th>
                    </tr>
                </table>
            </form>
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