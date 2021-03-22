<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <table class="table">
                <tr>
                    <td>
                    <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="inputs">
                    <datalist id="Searchid">
                    <?php
                    include 'Connect.php';
                    // ---------- Fetching item_id and item_name from stockitem
                        $sql = "SELECT * FROM stockItem";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $ItemId = $row["Item_ID"];
                                $Name = $row["Item_Name"];
                                echo "<option value=".$ItemId."></option>";
                                echo "<option value=".$Name."></option>";
                            }
                        }
                    ?>

                    </datalist>
                    </td>
                    <td><input type="submit" name="id" value="Search"></td>
                </tr>
                
                    <?php
                    include 'Connect.php';
                        if(isset($_POST["id"])){
                            $itemid = $_POST["SearchId"];
                            echo "<script>alert('$itemid');</script>";
                            $sql = "SELECT * FROM stockItem WHERE Item_Name like '$itemid%'";
                            $result = $con->query($sql);
                            if($result->num_rows > 0){
                                while($row= $result->fetch_array()){
                                    echo "
                                    <tr>
                                    <td>".$row["Date"]."</td>
                                    <td>".$row["Item_ID"]."</td>
                                    <td>".$row["Item_Name"]."</td>
                                    <td>".$row["Unit"]."</td>
                                    <td>".$row["Under"]."</td>
                                    <td>".$row["Quantity"]."</td>
                                    <td>".$row["Rate"]."</td>
                                    <td>".$row["Amount"]."</td>
                                    </tr>
                                    ";
                                }
                            }
                        }
                   ?>
            
            </table>
        </form>
    </div>
</body>
</html>