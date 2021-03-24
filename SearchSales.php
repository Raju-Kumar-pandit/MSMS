<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Sales Record</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <form action="" method="post">
        <table class="tables">
            <tr class="th">
                <th class="rows">Item Name</th>
                <th class="rows">Batch No</th>
                <th class="rows">Quantity</th>
                <th class="rows">Rate</th>
                <th class="rows">Input GST</th>
                <th class="rows">Discount</th>
                <th class="rows">Amount</th>
            </tr>
                <?php 
                    include 'Connect.php';
                    if(isset($_POST["name"])){
                        $row = $_POST["SearchID"];
                        $sql = "SELECT * FROM salesitem Sales_ID='$row' ";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row->fetch_assoc()){
                                echo "<tr class='thtd'>";
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
                    }
                ?>
        </table>
        </form>
    </div>
</body>
</html>