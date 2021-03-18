<html>
    <head>
        <title>Create Company</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='colors.css'>
    </head>
    <body>
        <div>
            <?php include 'Header.php' ?>
        </div>
        <div>
            <form action='ModifyCompany.php' method='POST'>
                <h1 class='h'>Edit Company Info </h1>
                <?php 
                    include 'Connect.php';  

                    $sql = "SELECT * FROM companyinfo where Company_ID='C00001'";

                    $result =$con->query($sql);

                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();

                            echo"
                            <table class='table'>
                                <tr>
                                    <th class='column'>Company ID</th>
                                    <td class='column'><input type='text' name='CompanyId' id='CompanyId' class='inputs' value=".$row["Company_ID"]." readonly></td>
                                </tr>
                                <tr>
                                    <th class='column'>Date</th>
                                    <td class='column'><input type='text' name='Date' id='Date' class='inputs' value=".$row["Date"]."></td>
                                </tr>
                                <tr>
                                    <th class='column'>Company Name</th>
                                    <td class='column'><input type='text' name='CompanyName' id='CompanyName' class='inputs' value=".$row["Company_Name"]."></td>
                                </tr>
                                <tr>
                                    <th class='column'>Mobile No.</th>
                                    <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value=".$row["Mobile_No"]."></td>
                                </tr>
                                <tr>
                                    <th class='column'>Email ID</th>
                                    <td class='column'><input type='email' name='EmailId' id='EmailId' class='emails' value=".$row["Email_ID"]."></td>
                                </tr>
                                <tr>
                                    <th class='column'>Place Name</th>
                                    <td class='column'><input type='text' name='PlaceName' id='PlaceName' class='inputs' value=".$row["Place_Name"]."></td>
                                </tr>
                                <tr>
                                    <th class='column'>State Nmae</th>
                                    <td class='column'><select name='StateName' id='StateName' class='inputs' value=".$row["State_Name"].">
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
                                    <td class='column'><select name='CityName' id='CityName' class='inputs' value=".$row["City_Name"].">
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
                                <tr>
                                    <th class='column'>Pin Code</th>
                                    <td class='column'><input type='text' name='PinCode' id='PinCode' class='inputs' maxlength='6' value=".$row["Pin_Code"]."></td>
                                </tr>
                                
                            </table>";
                        } else {
                            echo "Empty Table Data";
                        }
                ?>
               <table class='table'>
                    <tr>
                        <th class='column'><input type='submit' value='Submit' class='button'></th>
                    </tr>
                </table>
            </form>
        </div>
        <div>
            <?php include 'Footer.php' ?>
        </div>
    </body>
</html>
    