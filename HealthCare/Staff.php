<?php
      
    include 'Connect.php';

    $StaffId = NULL;
    $sql ="SELECT Staff_ID FROM staff order by Staff_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $StaffId = $row["Staff_ID"];
        $StaffId = substr($StaffId, 1);
        $StaffId = $StaffId + 1;
        if($StaffId < 10)
        {
            $StaffId = "S0000$StaffId";
           
        } 
        else
        {
            $StaffId = "S000$StaffId";   
        }
        
    }
    else
    {
        $StaffId = "S00001";
    }
    

$con->close();
?>
<html>
    <head>
        <title>Staff Info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
-        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
    <div>
        <?php include 'header.php'?>
    </div>
        <div class="divs">
            <form action="Staffconnection.php" method="POST">
            <h1 class="h">Staff Info Form</h1>
                <table class="table">
                    <tr>
                        <th class="column">Staff ID</th>
                        <td class="column"><input type="text" name="StaffId" id="StaffId" class="inputs" value="<?php echo $StaffId; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date" class="inputs" onclick="dates()" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Staff Name</th>
                        <td class="column"><input type="text" name="StaffName" id="StaffName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">Date of Birth</th>
                        <td class="column"><input type="date" name="Dateofbirth" id="Dateofbirth" class="inputs" required></td>
                    </tr>
                    <tr>
                    <th class="column">Gender</th>
                        <td class="column"><select name="Gender" id="Gender" class="inputs" required>
                            <option value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="column">Mobile No.</th>
                        <td class="column"><input type="text" name="MobileNo" id="MobileNo" class="inputs" maxlength="10"  required></td>
                    </tr>
                    <tr>
                        <th class="column">Email ID</th>
                        <td class="column"><input type="email" name="EmailId" id="EmailId" class="emails" required></td>
                    </tr>
                    <tr>
                        <th class="column">Village Name</th>
                        <td class="column"><input type="text" name="VillageName" id="VillageName" class="inputs" required></td>
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
                        <th class="column"><input type="submit" value="Create Staff" class="button"></th>
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
