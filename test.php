
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

    $sql = "SELECT * FROM companyinfo where Company_ID='C00002'";

    $result =$con->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    
            
                echo "<tr>
                    <th>Company ID</th>
                    <td><input type='text'name='CompanyId' value=".$row["Company_ID"]."></td>
                    <tr>
                        <th>Date</th>
                        <td><input type='text'name='Date' value=".$row["Date"]."></td>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <td><input type='text'name='CompanyName' value=".$row["Company_Name"]."></td>
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

<html>
    <body>
        <table>
            <tr id="rows">
                <td><input type="text" name="" id=""></td>
                <td><input type="submit" value="submit" onclick="javascript:add();"></td>
            </tr>

        </table>
    </body>
    <script>
        function add(){

            var row++;
            var input = document.createElement('input');
            input.type="text";
            input.setAttribute("class", "w3-input w3-border");
            input.setAttribute('id', 'row' + row);
            input.setAttribute('value', row);
            var row = documentElementById("row");
        }
    </script>
</html>