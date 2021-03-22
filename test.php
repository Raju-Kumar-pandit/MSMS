
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
                <td><input type="submit" value="submit" onclick="create();"></td>
            </tr>

        </table>
        <table>
        <tr>
                    <th class="column">Cutomer ID</th>
                    <td class="column"><input type="text" list="Ids" name="Id" id="Id">
                        <datalist id="Ids">
                        <?php
                        include 'Connect.php';

                        $sql = "SELECT Customer_ID FROM customer";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_assoc()){
                                echo  $row["Customer_ID"];
                                echo "<option value=". $row['Customer_ID']."></option>";
                            }
                        }
                    ?>
                        </datalist>
                    </td>
                    <th class="column">Mode</th>
                    <td class="column"><select name="Mode" id="Mode" class="input">
                        <option value="None">None</option>
                        <option value="Cash">Cash</option>
                        <option value="Credit">Credit</option>
                    </select></td>
                </tr>
        </table>

        <table>
                <tr>
                    <th class="column">Cutomer ID</th>
                    <td class="column">
                        <input type="text" list="Ids" name="Id" id="Id">
                        <datalist id="Ids">
                        <?php

                            include 'Connect.php';

                            $sql = "SELECT Purchase_ID FROM purchase";
                            $result = $con->query($sql);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    $id = $row['Purchase_ID'];
                                    echo "<td>".$id."</td>" ;
                                    echo "<option value=".$id."></option>";
                                }
                            }
                            $con->close();
                            ?>
                        </datalist>
                    </td>
                    <th class="column">Mode</th>
                    <td class="column"><select name="Mode" id="Mode" class="input">
                        <option value="None">None</option>
                        <option value="Cash">Cash</option>
                        <option value="Credit">Credit</option>
                    </select></td>
                </tr>
                <div>
                <input list="Items" name="Item" id="Item">

                <datalist id="Items">
                <?php

                    include 'Connect.php';

                    $sql = "SELECT Purchase_ID FROM purchase";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $id = $row['Purchase_ID'];
                            echo "<option value=".$id.">";
                            echo "<td>".$id."</td>" ;
                            echo "<option value=".$id."></option>";
                        }
                    }
                    $con->close();
                    ?>
                </datalist>
                </div>
        </table>
        <div>
            <?php

            
            ?>
        </div>
    </body>
    <script>

            function create(){
                var x=document.createElement("INPUT")
                x.setAttribute("type", "text");
                document.body.appendChild(x);
            }
    </script>
</html>

