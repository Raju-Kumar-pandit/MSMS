<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff form</title>
    <link rel='stylesheet' href='colors.css'>
</head>
<body>
    <div>
        <?php include 'Header.php' ?>
    </div>
    <div>
        <form action="ModifyStaff.php" method="POST">
            <h1 class='h'>Edit Company Info </h1>
                <?php 
                    include 'Connect.php';  

                    $sql = "SELECT * FROM staff where Staff_ID='S00001'";

                    $result =$con->query($sql);

                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();

                            echo "<table class='table'>
                            <tr>
                                <th class='column'>Staff ID</th>
                                <td class='column'><input type='text' name='StaffId' id='StaffId' class='inputs' value=".$row['Staff_ID']." readonly></td>
                            </tr>
                            <tr>
                                <th class='column'>Date</th>
                                <td class='column'><input type='text' name='Date' id='Date' class='inputs' value=".$row['Date']." readonly></td>
                            </tr>
                            <tr>
                                <th class='column'>Staff Name</th>
                                <td class='column'><input type='text' name='StaffName' id='StaffName' class='inputs' value=".$row['Staff_Name']." required></td>
                            </tr>
                            <tr>
                                <th class='column'>Date of Birth</th>
                                <td class='column'><input type='date' name='Dateofbirth' id='Dateofbirth' class='inputs' value=".$row['DOB']." required></td>
                            </tr>
                            <tr>
                                <th class='column'>Gender</th>
                                <td class='column'><select name='Gender' id='Gender' class='inputs' value=".$row['Gender']." required>
                                    <option value='None'>None</option>
                                    <option value='Male'>Male</option>
                                    <option value='Female'>Female</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th class='column'>Mobile No.</th>
                                <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value=".$row['Mobile_No']."  required></td>
                            </tr>
                            <tr>
                                <th class='column'>Email ID</th>
                                <td class='column'><input type='email' name='EmailId' id='EmailId' class='emails' value=".$row['Email_ID']." required></td>
                            </tr>
                            <tr>
                                <th class='column'>Village Name</th>
                                <td class='column'><input type='text' name='VillageName' id='VillageName' class='inputs' value=".$row['Village_Name']." required></td>
                            </tr>
                            <tr>
                                <th class='column'>State Nmae</th>
                                <td class='column'><select name='StateName' id='StateName' class='inputs' value=".$row['State_Name']." required>
                                    <option value='Assam'>Assam</option>
                                    <option value='Bihar'>Bihar</option>
                                    <option value='Gujrat'>Gujrat</option>
                                    <option value='Haryana'>Haryana</option>
                                    <option value='Manipur'>Manipur</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th class='column'>City Name</th>
                                <td class='column'><select name='CityName' id='CityName' class='inputs' value=".$row['City_Name']." required>
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
                            echo "Empty Table Data";
                        }
                ?>
                <table class="table">
                    <tr>
                        <th class="column"><input type="submit" value="Submit" class="button"></th>
            
                    </tr>
                </table>
        </form>
    </div>
    <div>
        <?php include 'Footer.php' ?>
    </div>
</body>
</html>