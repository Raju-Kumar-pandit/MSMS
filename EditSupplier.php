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
    <form action="" method="post">
        <h1 class="h">Edit Supplier Info</h1>
        <table class="tables">
            <tr>
                <td class="column">
                <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="inputs">
                <datalist id="Searchid">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM supplier";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $SupplierId = $row["Supplier_ID"];
                            echo "<option value=".$SupplierId."></option>";
                        }
                    }
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="button"></td> 
            </tr>
        </table>
    </form>
        <form action="ModifySupplier.php" method="post">
            <?php
                include 'Connect.php';
            if(isset($_POST['id'])){
                $SupplierId = $_POST['SearchId'];
                $sql = "SELECT * FROM Supplier WHERE Supplier_ID='$SupplierId'";
                $result = $con->query($sql);
                if($result->num_rows > 0 ){
                    $row = $result->fetch_assoc();
                    $SupplierId = $row['Supplier_ID'];
                    $Date = $row['Date'];
                    $SupplierName = $row['Supplier_Name'];
                    $ShopName = $row['Shop_Name'];
                    $MobileNo = $row['Mobile_No'];
                    $EmailId = $row['Email_ID'];
                    $PlaceName = $row['Place_Name'];
                    $StateName = $row['State_Name'];
                    $CityName = $row['City_Name'];  
                    echo "<table class='table'>
                    <tr>
                        <th class='column'>Supplier ID</th>
                        <td class='column'><input type='text' name='SupplierId' id='SupplierId' class='inputs' value='$SupplierId' readonly></td>
                    </tr>";
                    echo "<tr>
                        <th class='column'>Date</th>
                        <td class='column'><input type='text' name='Date' id='Date' class='inputs' value='$Date' readonly></td>
                    </tr>";
                    echo "<tr>
                        <th class='column'>Supplier Name</th>
                        <td class='column'><input type='text' name='SupplierName' id='SupplierName' class='inputs' value='$SupplierName' required></td>
                    </tr>";
                    echo "<tr>
                        <th class='column'>Shop Name</th>
                        <td class='column'><input type='text' name='ShopName' id='ShopName' class='inputs' value='$ShopName' required></td>
                    </tr>";
                    echo "<tr>
                        <th class='column'>Mobile No.</th>
                        <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value='$MobileNo' required></td>
                    </tr>";
                    echo "<tr>
                        <th class='column'>Email ID</th>
                        <td class='column'><input type='email' name='EmailId' id='EmailId' class='emails' value='$EmailId' required></td>
                    </tr>";
                    echo "<tr>
                        <th class='column'>Place Name</th>
                        <td class='column'><input type='text' name='PlaceName' id='PlaceName' class='inputs' value='$PlaceName' required></td>
                    </tr>";
                    echo "<tr>
                        <th class='column'>State Nmae</th>
                        <td class='column'><input type='text' name='StateName' id='StateName' class='inputs' value='$StateName' required>
                        </td>
                    </tr>
                    <tr>
                        <th class='column'>City Name</th>
                        <td class='column'><input type='text' name='CityName' id='CityName' class='inputs' value='$CityName' required>
                        </td>
                    </tr>
                   
                </table>";
                
            ?>
                <table class="table">
                    <tr>
                        <td class="column"><input type="submit" value="Update" class="button"></td>
                        <td class="column"><button class="button"><a href='DeleteSupplier.php?id=<?php echo $row['Supplier_ID']; ?>'>Delete</a></button></td>
                    </tr>
                </table>
        </form>
        <?php
            } else {
                    echo $con->error;
                }
            }
        ?>
    </div>
    <div>
        <?php include 'Footer.php'?>
    </div>
</body>
</html>
