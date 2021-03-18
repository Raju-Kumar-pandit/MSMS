<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer Info</title>
</head>
<body>
    <div>
        <?php include 'Header.php'?>
    </div>
    <form action="ModifyCustomer.php" method="POST">
        <h1 class="h">Edit Customer Info</h1>
        <?php 
            include 'Connect.php';
            
            $sql = "SELECT * FROM customer WHERE Customer_ID='C00001'";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                echo "
                <table class='table'>
                    <tr>
                        <th class='column'>Customer ID</th>
                        <td class='column'><input type='text' name='CustomerId' id='CustomerId' class='inputs' value=".$row['Customer_ID']." readonly></td>
                    </tr>
                    <tr>
                        <th class='column'>Date</th>
                        <td class='column'><input type='text' name='Date' id='Date' class='inputs' value=".$row['Date']." readonly></td>
                    </tr>
                    <tr>
                        <th class='column'>Patient Name</th>
                        <td class='column'><input type='text' name='PatientName' id='PatientName' class='inputs' value=".$row['Patient_Name']."></td>
                    </tr>

                    <tr>
                        <th class='column'>Patient Age</th>
                        <td class='column'><input type='text' name='PatientAge' id='PatientAge' class='inputs'  maxlength='3' value=".$row['Patient_Age']."></td>
                    </tr>
                    <tr>
                        <th class='column'>Gender</th>
                        <td class='column'><select name='Gender' id='Gender' class='inputs' value=".$row['Gender'].">
                            <option value='None'>None</option>
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th class='column'>Customer Name</th>
                        <td class='column'><input type='text' name='CustomerName' id='CustomerName' class='inputs' value=".$row['Customer_Name']."></td>
                    </tr>
                    <tr>
                        <th class='column'>Mobile No.</th>
                        <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value=".$row['Mobile_No']."></td>
                    </tr>
                    <tr>
                        <th class='column'>Village Name</th>
                        <td class='column'><input type='text' name='VillageName' id='VillageName' class='inputs' value=".$row['Village_Name']."></td>
                    </tr>
                    <tr>
                        <th class='column'>State Nmae</th>
                        <td class='column'><select name='StateName' id='StateName' class='inputs' value=".$row['State_Name'].">
                            <option value='Assam'>Assam</option>
                            <option value='Bihar'>Bihar</option>
                            <option value='Gujrat'>Gujrat</option>
                            <option value='Haryana'>Haryana</option>
                            <option value='Manipur'>Manipur</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <th>City Name</th>
                        <td><select name='CityName' id='CityName' class='inputs' value=".$row['City_Name'].">
                        <option value='Arwal'>Arwal</option>
                        <option value='Bhagalpur'>Bhagalpur</option>
                        <option value='Bhojpur'>Bhojpur</option>
                        <option value='Muzaffarpur'>Muzaffarpur</option>
                        <option value='Nalanda'>Nalanda</option>
                        <option value='Patna'>Patna</option>
                        <option value='Vaishali'>Vaishali</option>
                        </select>
                        </td>
                    </tr>
                    
                </table>";
            } else {
                echo $con->error;
            }
        ?>
                 <table class="table">
                    <tr>
                        <th class="column"><input type="submit" value="Submit" class="button"></th>
            
                    </tr>
                </table>

    </form>
    <div>
        <?php include 'Footer.php'?>
    </div>
</body>
</html>