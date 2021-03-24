<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='colors.css'>
</head>
<body>
    <div>
        <?php include 'Header.php' ?>
    </div>
        <div>
            <form action="ModifyAdmin.php" method="POST">
            <h1 class="h">Edit Admin Info Form</h1>
                <?php
                    include 'Connect.php';  

                    $sql = "SELECT * FROM admin where Admin_ID='A00001'";

                    $result =$con->query($sql);

                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $AdminId =$row['Admin_ID'];
                            $AdminName = $row['Admin_Name'];
                            $Date = $row['Date'];
                            $DOB = $row['DOB'];
                            $Gender = $row['Gender'];
                            $MobileNo =$row['Mobile_No'];
                            $EmailId =$row['Email_ID'];
                            $VillageName = $row['Village_Name'];
                            $StateName = $row['State_Name'];
                            $CityName = $row['City_Name'];
                            echo "<table class='table'>
                            <tr>
                                <th class='column'>Admin ID</th>
                                <td class='column'><input type='text' name='AdminId' id='AdminId' class='inputs' value='$AdminId' readonly></td>
                            </tr>
                            <tr>
                                <th class='column'>Date</th>
                                <td class='column'><input type='text' name='Date' id='Date' class='inputs' value='$Date' readonly></td>
                            </tr>
                            <tr>
                                <th class='column'>Admin Name</th>
                                <td class='column'><input type='text' name='AdminName' id='AdminName' class='inputs' value='$AdminName'></td>
                            </tr>
                            <tr>
                                <th class='column'>Date of Birth</th>
                                <td class='column'><input type='date' name='Dateofbirth' id='Dateofbirth' class='inputs' value='$DOB'></td>
                            </tr>
                            <tr>
                                <th class='column'>Gender</th>
                                <td class='column'><select name='Gender' id='Gender' class='inputs' value='$Gender'>
                                    <option value='None'>None</option>
                                    <option value='Male'>Male</option>
                                    <option value='Female'>Female</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <th class='column'>Mobile No.</th>
                                <td class='column'><input type='text' name='MobileNo' id='MobileNo'  class='inputs' maxlength='10' value='$MobileNo'></td>
                            </tr>
                            <tr>
                                <th class='column'>Email ID</th>
                                <td class='column'><input type='email' name='EmailId' id='EmailId' class='emails' value='$EmailId'></td>
                            </tr>
                            <tr>
                                <th class='column'>Village Name</th>
                                <td class='column'><input type='text' name='VillageName' id='VillageName' class='inputs' value='$VillageName'></td>
                            </tr>
                            <tr>
                                <th class='column'>State Nmae</th>
                                <td class='column'><select name='StateName' id='StateName' class='inputs' value='$StateName'>
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
                                <td class='column'><select name='CityName' id='CityName' class='inputs' value='$CityName'>
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
                        <th class="column"><input type="submit" value="Update" class="button"></th>
            
                    </tr>
                </table>
            </form>
        </div>

    <div>
        <?php include 'Footer.php' ?>
    </div>
    
</body>
</html>

