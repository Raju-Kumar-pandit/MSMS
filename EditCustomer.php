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
    <div>
    <form action="" method="post">
        <h1 class="h">Edit Customer Info</h1>
        <table class="tables">
            <tr>
                <td class="column">
                <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="inputs">
                <datalist id="Searchid">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM customer";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $CustomerId = $row["Customer_ID"];
                            echo "<option value=".$CustomerId."></option>";
                        }
                    }
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="button"></td> 
            </tr>
        </table>
    </form>
    <form action="ModifyCustomer.php" method="POST">
        
        <?php 
            include 'Connect.php';
        if(isset($_POST['id'])){
            $CustomerId = $_POST['SearchId'];
            $sql = "SELECT * FROM customer WHERE Customer_ID='$CustomerId'";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $CustomerId = $row['Customer_ID'];
                $Date = $row['Date'];
                $PatientName = $row['Patient_Name'];
                $PatientAge = $row['Patient_Age'];
                $Gender = $row['Gender'];
                $Customer = $row['Customer_Name'];
                $MobileNo = $row['Mobile_No'];
                $VillageName = $row['Village_Name'];
                $StateName = $row['State_Name'];
                $CityName = $row['City_Name'];

                echo "
                <table class='table'>
                    <tr>
                        <th class='column'>Customer ID</th>
                        <td class='column'><input type='text' name='CustomerId' id='CustomerId' class='inputs' value='$CustomerId' readonly></td>
                    </tr>
                    <tr>
                        <th class='column'>Date</th>
                        <td class='column'><input type='text' name='Date' id='Date' class='inputs' value='$Date' readonly></td>
                    </tr>
                    <tr>
                        <th class='column'>Patient Name</th>
                        <td class='column'><input type='text' name='PatientName' id='PatientName' class='inputs' value='$PatientName'></td>
                    </tr>

                    <tr>
                        <th class='column'>Patient Age</th>
                        <td class='column'><input type='text' name='PatientAge' id='PatientAge' class='inputs'  maxlength='3' value='$PatientAge'></td>
                    </tr>
                    <tr>
                        <th class='column'>Gender</th>
                        <td class='column'><input type='text' name='Gender' id='Gender' class='inputs' value='$Gender'>
                        </td>
                    </tr>
                    <tr>
                        <th class='column'>Customer Name</th>
                        <td class='column'><input type='text' name='CustomerName' id='CustomerName' class='inputs' value='$Customer'></td>
                    </tr>
                    <tr>
                        <th class='column'>Mobile No.</th>
                        <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value='$MobileNo'></td>
                    </tr>
                    <tr>
                        <th class='column'>Village Name</th>
                        <td class='column'><input type='text' name='VillageName' id='VillageName' class='inputs' value='$VillageName'></td>
                    </tr>
                    <tr>
                        <th class='column'>State Name</th>
                        <td class='column'><input type='text' name='StateName' id='StateName' class='inputs' value='$StateName'>
                        </td>
                    </tr>
                    <tr>
                        <th class='column'>City Name</th>
                        <td class='column'><input type='text' name='CityName' id='CityName' class='inputs' value='$CityName'>
                        </td>
                    </tr>
                    
                </table>";
            
        ?>
                 <table class="table">
                    <tr>
                        <td class="column"><input type="submit" value="Update" class="button"></td>
                        <td class="column"><button class="button"><a href='DeleteCustomer.php?id=<?php echo $row['Customer_ID']; ?>'>Delete</a></button></td>
                    </tr>
                </table>
        <?php
            } else {
                echo "Data is Empty";
            }
        }
        ?>
    </form>
    </div>
    <div>
        <?php include 'Footer.php'?>
    </div>
</body>
</html>