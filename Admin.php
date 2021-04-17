<?php
    include 'Connect.php';

    $AdminId = NULL;
    $sql ="SELECT Admin_ID FROM admin order by Admin_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $AdminId = $row["Admin_ID"];
        $AdminId = substr($AdminId, 1);
        $AdminId = $AdminId + 1;
        if($AdminId < 10)
        {
            $AdminId = "A0000$AdminId";
           
        } 
        else
        {
            $AdminId = "A000$AdminId";   
        }
        
    }
    else
    {
        $AdminId = "A00001";
    }
    

$con->close();
?>
<html>
    <head>
        <title>Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body onload="dates()">
    <div>
        <?php include 'Header.php'?>
    </div>
        <div>
            <form action="Adminconnect.php" method="POST">
            <h1 class="h">Admin Info Form</h1>
                <table class="table">
                    <tr>
                        <th class="column">Admin ID</th>
                        <td class="column"><input type="text" name="AdminId" id="AdminId" class="inputs" value="<?php echo $AdminId; ?>" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Date</th>
                        <td class="column"><input type="text" name="Date" id="Date" class="inputs" onclick="dates()" readonly></td>
                    </tr>
                    <tr>
                        <th class="column">Admin Name</th>
                        <td class="column"><input type="text" name="AdminName" id="AdminName" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">Date of Birth</th>
                        <td class="column"><input type="date" name="Dateofbirth" id="Dateofbirth" class="inputs" required></td>
                    </tr>
                    <tr>
                        <th class="column">Gender</th>
                        <td class="column"><input type="text" name="Gender" list="ids" id="Gender" class="inputs" required>
                        <datalist id="ids">
                            <?php
                            include 'Connect.php';

                                $sql = "SELECT * FROM gender";
                                $result = $con->query($sql);
                                if($result->num_rows > 0){
                                    while($row= $result->fetch_array()){
                                        $Gender = $row["Gender"];
                                        echo "<option value='$Gender'></option>";
                                    }
                                }
                                $con->close();
                            ?>
                        </datalist>
                        </td>
                    </tr>
                    <tr>
                        <th class="column">Mobile No.</th>
                        <td class="column"><input type="text" name="MobileNo" id="MobileNo"  class="inputs" maxlength="10" required></td>
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
                        <td class="column"><input type="text" name="StateName" list="id" id="StateName" class="inputs" required>
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
                        <th class="column"><input type="submit" value="Create Admin" class="button"></th>
            
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