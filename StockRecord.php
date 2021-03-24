<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Record</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <form action="" method="post">
        <h1 class="h"> List of Stock Item</h1>
            <table class="tables">
                <tr>
                    <td class="column" colspan ="2">
                    <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="input">
                    <datalist id="Searchid">
                    <?php
                    include 'Connect.php';

                        $sql = "SELECT * FROM stockItem";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $ItemId = $row["Item_ID"];
                                $Name = $row["Item_Name"];
                                echo "<option value=".$ItemId."></option>";
                                echo "<option value=".$Name."></option>";
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
                    <th class="rows">Date</th>
                    <th class="rows">Item ID</th>
                    <th class="rows">Item Name</th>
                    <th class="rows">Under</th>
                    <th class="rows">Unit</th>
                    <th class="rows">Quantity</th>
                    <th class="rows">Rate</th>
                    <th class="rows">Amount</th>
                </tr>
                <?php
                    include 'Connect.php';
                        if(isset($_POST["id"])){
                            $itemid = $_POST["SearchId"];
                            $sql = "SELECT * FROM stockItem WHERE Item_ID='$itemid'";
                            $result = $con->query($sql);
                            if($result->num_rows > 0){
                                while($row= $result->fetch_array()){
                                    echo"
                                    <tr class='thtd'>
                                    <td>".$row['Date']."</td>
                                    <td>".$row['Item_ID']."</td>
                                    <td>".$row['Item_Name']."</td>
                                    <td>".$row['Under']."</td>
                                    <td>".$row['Unit']."</td>
                                    <td>".$row['Quantity']."</td>
                                    <td>".$row['Rate']."</td>
                                    <td>".$row['Amount']."</td>
                                    </tr>
                                    ";
                                }
                            }
                        }
                ?>
            </table>
            <table class="tables">
            <tr>
                <td class="column"><input type="submit" value="Back" class="button"></td>
            </tr>
            </table>
        </form>
    </div>
</body>
</html>