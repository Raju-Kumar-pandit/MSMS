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
                            $CompanyId = $row['Company_ID'];
                            $CompanyName = $row['Company_Name'];
                            $Date = $row['Date'];
                            $MobileNo = $row['Mobile_No'];
                            $EmailId = $row['Email_ID'];
                            $PlaceName = $row['Place_Name'];
                            $StateName = $row['State_Name'];
                            $CityName = $row['City_Name'];
                            $Pincode = $row['Pin_Code'];
                            echo"
                            <table class='table'>
                                <tr>
                                    <th class='column'>Company ID</th>
                                    <td class='column'><input type='text' name='CompanyId' id='CompanyId' class='inputs' value='$CompanyId' readonly></td>
                                </tr>
                                <tr>
                                    <th class='column'>Date</th>
                                    <td class='column'><input type='text' name='Date' id='Date' class='inputs' value='$Date' readonly></td>
                                </tr>
                                <tr>
                                    <th class='column'>Company Name</th>
                                    <td class='column'><input type='text' name='CompanyName' id='CompanyName' class='inputs' value='$CompanyName'></td>
                                </tr>
                                <tr>
                                    <th class='column'>Mobile No.</th>
                                    <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value='$MobileNo'></td>
                                </tr>
                                <tr>
                                    <th class='column'>Email ID</th>
                                    <td class='column'><input type='email' name='EmailId' id='EmailId' class='emails' value='$EmailId'></td>
                                </tr>
                                <tr>
                                    <th class='column'>Place Name</th>
                                    <td class='column'><input type='text' name='PlaceName' id='PlaceName' class='inputs' value='$PlaceName'></td>
                                </tr>
                                <tr>
                                    <th class='column'>State Nmae</th>
                                    <td class='column'><input type='text' name='StateName' id='StateName' class='inputs' value='$StateName'>
                                    </td>
                                </tr>
                                <tr>
                                    <th class='column'>City Name</th>
                                    <td class='column'><input type='text' name='CityName' id='CityName' class='inputs' value='$CityName'>
                                    </td>
                                </tr>
                                <tr>
                                    <th class='column'>Pin Code</th>
                                    <td class='column'><input type='text' name='PinCode' id='PinCode' class='inputs' maxlength='6' value='$Pincode'></td>
                                </tr>
                                
                            </table>";
                        
                ?>
               <table class='table'>
                    <tr>
                        <td class='column'><input type='submit' value='Update' class='button'></td>
            
                        <td class='column'><button class='button'><a href='DeleteCompany.php?id=<?php echo $row["Company_ID"]; ?>'>Delete</a></button></td>
                    </tr>
                </table>
                <?php
                } else {
                    echo "Empty Table Data";
                }
                ?>
            </form>
        </div>
        <div>
            <?php include 'Footer.php' ?>
        </div>
    </body>
</html>
    