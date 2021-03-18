<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier Info form</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <?php include 'Header.php'?>
    </div>
    <div>
        <form action="ModifySupplier.php" method="post">
        <h1 class="h">Edit Supplier Info form</h1>
            <?php
                include 'Connect.php';

                $sql = "SELECT * FROM Supplier WHERE Supplier_ID='S00001'";
                $result = $con->query($sql);
                if($result->num_rows > 0 ){
                    $row = $result->fetch_assoc();
                    echo "<table class='table'>
                    <tr>
                        <th class='column'>Supplier ID</th>
                        <td class='column'><input type='text' name='SupplierId' id='SupplierId' class='inputs' value=".$row['Supplier_ID']." readonly></td>
                    </tr>
                    <tr>
                        <th class='column'>Date</th>
                        <td class='column'><input type='text' name='Date' id='Date' class='inputs' value=".$row['Date']." readonly></td>
                    </tr>
                    <tr>
                        <th class='column'>Supplier Name</th>
                        <td class='column'><input type='text' name='SupplierName' id='SupplierName' class='inputs' value=".$row['Supplier_Name']." required></td>
                    </tr>
                    <tr>
                        <th class='column'>Shop Name</th>
                        <td class='column'><input type='text' name='ShopName' id='ShopName' class='inputs' value=".$row['Shop_Name']." required></td>
                    </tr>
                    <tr>
                        <th class='column'>Mobile No.</th>
                        <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value=".$row['Mobile_No']." required></td>
                    </tr>
                    <tr>
                        <th class='column'>Email ID</th>
                        <td class='column'><input type='email' name='EmailId' id='EmailId' class='emails' value=".$row['Email_ID']." required></td>
                    </tr>
                    <tr>
                        <th class='column'>Place Name</th>
                        <td class='column'><input type='text' name='PlaceName' id='PlaceName' class='inputs' value=".$row['Place_Name']." required></td>
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
                    echo $con->error;
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
        <?php include 'Footer.php'?>
    </div>
</body>
</html>