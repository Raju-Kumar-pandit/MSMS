
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

</body>
</html>