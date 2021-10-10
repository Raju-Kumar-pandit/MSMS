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
        <?php include 'header.php' ?>
    </div>
    <div>
        <form action="" method="post" class="divs">
            <h1 class="h">Edit Staff Info</h1>
            <table>
                <tr>
                    <td>
                    <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="input">
                    <datalist id="Searchid">
                    <?php
                    include 'Connect.php';

                        $sql = "SELECT * FROM staff";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $CustomerId = $row["Staff_ID"];
                                echo "<option value=".$CustomerId."></option>";
                            }
                        }
                    ?>

                    </datalist>
                    </td>
                    <td><input type="submit" name="id" value="Search" class="input"></td> 
                </tr>
            </table>
        </form>
        <form action="ModifyStaff.php" method="POST">
                <?php 
                    include 'Connect.php';  
                if(isset($_POST['id'])){
                    $StaffId = $_POST['SearchId'];
                    $sql = "SELECT * FROM staff where Staff_ID='$StaffId'";

                    $result =$con->query($sql);

                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            $StaffId = $row['Staff_ID'];
                            $Date = $row['Date'];
                            $StaffName = $row['Staff_Name'];
                            $DOB = $row['DOB'];
                            $Gender = $row['Gender'];
                            $MobileNo = $row['Mobile_No'];
                            $EmailId = $row['Email_ID'];
                            $VillageName = $row['Village_Name'];
                            $StateName = $row['State_Name'];
                            $CityName = $row['City_Name']; 

                            echo "
                            <table class='table'>
                            <tr>
                                <th class='column'>Staff ID</th>
                                <td class='column'><input type='text' name='StaffId' id='StaffId' class='inputs' value='$StaffId' readonly></td>
                            </tr>
                            <tr>
                                <th class='column'>Date</th>
                                <td class='column'><input type='text' name='Date' id='Date' class='inputs' value='$Date' readonly></td>
                            </tr>
                            <tr>
                                <th class='column'>Staff Name</th>
                                <td class='column'><input type='text' name='StaffName' id='StaffName' class='inputs' value='$StaffName' required></td>
                            </tr>
                            <tr>
                                <th class='column'>Date of Birth</th>
                                <td class='column'><input type='date' name='Dateofbirth' id='Dateofbirth' class='inputs' value='$DOB' required></td>
                            </tr>
                            <tr>
                                <th class='column'>Gender</th>
                                <td class='column'><input type='text' name='Gender' id='Gender' class='inputs' value='$Gender' required>
                                </td>
                            </tr>
                            <tr>
                                <th class='column'>Mobile No.</th>
                                <td class='column'><input type='text' name='MobileNo' id='MobileNo' class='inputs' maxlength='10' value='$MobileNo'  required></td>
                            </tr>
                            <tr>
                                <th class='column'>Email ID</th>
                                <td class='column'><input type='email' name='EmailId' id='EmailId' class='emails' value='$EmailId' required></td>
                            </tr>
                            <tr>
                                <th class='column'>Village Name</th>
                                <td class='column'><input type='text' name='VillageName' id='VillageName' class='inputs' value='$VillageName' required></td>
                            </tr>
                            <tr>
                                <th class='column'>State Nmae</th>
                                <td class='column'><input type='text' name='StateName' id='StateName' class='inputs' value='$StaffName' required>
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
                        <td class="column"><button class="button"><a href='DeleteStaff.php?id=<?php echo $row['Staff_ID']; ?>'>Delete</a></button></td>
                    </tr>
                </table>
        </form>
    </div>
        <?php
        } else {
            echo "<script>alert('Not record found....Please retry')</script>";
        }
    }
        ?>
    <div>
        <?php include 'Footer.php' ?>
    </div>
</body>
</html>