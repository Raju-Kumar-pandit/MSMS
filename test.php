
<html>
<head>
    <title>test </title>
</head>
<body>
    <div>
        <?php include 'Header.php'; ?>
    </div>

<div>
<form action="">
<table class="table">
    <tr>
        <th>Search Company ID</th>
        <td><select name="SearchId" id="SearchId"></select></td>
        <?php 
            include 'Connect.php';
            
            $sql = "SELECT Company_ID FROM companyinfo";
            $result = $con->query($sql);
            if($result->num_rows > 0){
                while($row=$result->fetch_assoc()){
                    $SearchId = $row["Company_ID"];
                    echo "<option value=".$SearchId."></option>";
                }
            }
        ?>
    </tr>
    <?php 

    include 'Connect.php';

    $sql = "SELECT * FROM companyinfo where Company_ID='C00001'";

    $result =$con->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
                    $CompanyName = $row["Company_Name"];
            
                echo "<tr>
                        <th>Company Name</th>
                        <td><input type='text'name='CompanyName' value='$CompanyName'></td>
                    </tr>
                    <tr>
                        <th>Mobile No.</th>
                        <td><input type='text'name='MobileNo' value=".$row["Mobile_No"]."></td>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <td><input type='text'name='CompanyName' value=".$row["Company_Name"]."></td>
                    </tr>
                    <tr>
                        <th>State Name</th>
                        <td><input type='text' name='StateName' value=".$row["State_Name"]."></td>
                    </tr>";
                    
                    
                    
    
    } else {
        echo "Empty Table Data";
    }
    ?>
    <tr>
    <td><input type="submit" value="Submit"></td>
    </tr>
</table>
</form>   
</div>
<div>
<?php include 'Footer.php'; ?>
</div>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-primary text-center">Delete and Update operation</h1>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open modal
            </button>
        </div>
        <div class="text-danger">
            <h2>All Records</h2>
        </div>
        <div class="records_content">
        
        </div>

        <form action="Adminconnect.php" method="post">
        <div class="modal" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">Delete and Update operation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div class="form-group">
                <label>Admin ID:</label>
                <input type="text" name="AdminId" id="AdminId" class="form-control">
            </div>
            <div class="form-group">
                <label>Date:</label>
                <input type="text" name="Date" id="Date" class="form-control">
            </div>
            <div class="form-group">
                <label>Admin Name:</label>
                <input type="text" name="AdminName" id="AdminName" class="form-control">
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input type="text" name="Dateofbirth" id="dateofbirth" class="form-control">
            </div>
            <div class="form-group">
                <label>MobileNo:</label>
                <input type="text" name="MobileNo" id="MobileNo" class="form-control">
            </div>
            <div class="form-group">
                <label>Email ID:</label>
                <input type="text" name="EmailId" id="EmailId" class="form-control">
            </div>
            <div class="form-group">
                <label>Village Name:</label>
                <input type="text" name="VillageName" id="VillageName" class="form-control">
            </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </form>
            

        </div>
        </div>
        </div>
    </div>


</body>
</html>

</body>
</html>