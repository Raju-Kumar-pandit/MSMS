<html>
    <head>
        <title>Sales Record</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
        <form action="" method="post">
            <h1 class="h"> List of Stock Item</h1>
         <table class="tables">
            <tr>
                <td class="column" colspan="2">
                <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="input">
                <datalist id="Searchid">
                <?php
                include 'Connect.php';

                    $sql = "SELECT * FROM sales";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row= $result->fetch_array()){
                            $SalesId = $row["Sales_ID"];
                            echo "<option value=".$SalesId."></option>";
                        }
                    } else {
                        echo $con->error;
                    }
                ?>

                </datalist>
                </td>
                <td class="column"><input type="submit" name="id" value="Search" class="input"></td>
            </tr>
            <tr class="th">
                <th class="rows">Sales ID</th>
                <th class="rows">Date</th>
                <th class="rows">Customer ID</th>
                <th class="rows">Mode</th>  
                <th class="rows">Total Amount</th>
                <th class="rows">PayAmount</th>
                <th class="rows">Dues Amount</th>
            </tr>
            <?php

                include 'Connect.php';
            if(isset($_POST["id"])){
                $SalesId = $_POST["SearchId"];
                $sql = "SELECT * FROM sales WHERE Sales_ID='$SalesId' ";

                $result = $con->query($sql);
                if($result->num_rows > 0){
                    
                    while($row = $result->fetch_assoc()){
                    echo '<tr class="thtd" name="row">';
                    echo "<td>".$row["Sales_ID"]."</td>";
                    echo "<td>".$row["Date"]."</td>";
                    echo "<td>".$row["Customer_ID"]."</td>";
                    echo "<td>".$row["Mode"]."</td>";
                    echo "<td>".$row["Total_Amount"]."</td>";
                    echo "<td>".$row["Pay_Amount"]."</td>";
                    echo "<td>".$row["Dues_Amount"]."</td>";
                    echo "</tr>";
                    }
                    
                }
            }
            //$con->close();
            ?>
            
            <tr>
                <td class="column"><input type="submit" value="Next" name="next" class="button"></td>
            </tr>            
        </table>
        <table class="tables">
            
            <?php/*
                include 'Connect.php';
                if(isset($_POST["next"])){
                    $row = $_POST["Sales_ID"];
                    $sqls = "SELECT * FROM salesitem WHERE Sales_ID='$row'";
                    $result = $con->query($sqls);
                    if($result->num_rows > 0){
                        while($row->fetch_assoc()){
                            echo "<tr class='thtd'>";
                            echo "<td>".$row["Sales_ID"]."</td>";
                            echo "<td>".$row["Item_Name"]."</td>";
                            echo "<td>".$row["Batch_No"]."</td>";
                            echo "<td>".$row["Quantity"]."</td>";
                            echo "<td>".$row["Rate"]."</td>";
                            echo "<td>".$row["Input_GST"]."</td>";
                            echo "<td>".$row["Discount"]."</td>";
                            echo "<td>".$row["Amount"]."</td>";
                            echo "</tr>";
                        }
                    }
                }*/
            ?>
        </table>
        
        </form>
        </div>
        
    </body>
</html>