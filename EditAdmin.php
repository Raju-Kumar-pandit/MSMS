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
            <form action="" method="post">
            <h1 class="h">Edit Admin Info Form</h1>
            <table class="tables">
            <tr>
                <td class="column">
                <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="inputs">
                <datalist id="Searchid">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM admin";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $AdminId = $row["Admin_ID"];
                            echo "<option value=".$AdminId."></option>";
                        }
                    }
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="button"></td> 
            </tr>
            </form>
            <form action="ModifyAdmin.php" method="POST">
            
            
                <?php
                    include 'Connect.php';  
                if(isset($_POST["id"])){
                   $AdminId = $_POST["SearchId"];
                    $sql = "SELECT * FROM admin where Admin_ID='$AdminId'";

                    $result =$con->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){;
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
                                <td class='column'><input type='text' name='Gender' id='Gender' class='inputs' value='$Gender'>";   
                            
                                echo "</td>
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
                        <td class="column"><button class="button"><a href='DeleteAdmin.php?id=<?php echo $row['Admin_ID']; ?>'>Delete</a></button></td>
                    </tr>
                <?php
                            }
                        } else {
                            echo "Empty Table Data";
                        }
                }
                ?>
                </table>
            </form>
        </div>

    <div>
        <?php include 'Footer.php' ?>
    </div>
    
</body>
</html>

