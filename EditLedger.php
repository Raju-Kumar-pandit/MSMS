<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="colors.css">
    <title>Edit Ledger</title>
</head>
<body>
    <div>
        <?php include 'Header.php'?>
    </div>
    <div>
        <form action="" method="post">
            <h1 class="h">Edit Ledger Info</h1>
            <table class="tables">
                <tr>
                    <td class="column">
                    <input type="search" name="SearchId" list="Searchid" id="SearchId" placeholder="Search data....." class="inputs">
                    <datalist id="Searchid">
                    <?php
                    include 'Connect.php';

                        $sql = "SELECT * FROM ledger";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $LedgerId = $row["Ledger_ID"];
                                echo "<option value=".$LedgerId."></option>";
                            }
                        }
                    ?>

                    </datalist>
                    </td>
                    <td class="column"><input type="submit" name="id" value="Search" class="button"></td> 
                </tr>
            </table>
        </form>
        <form action="ModifyLedger.php" method="post">
        <?php
            include 'Connect.php';
                if(isset($_POST['id'])){
                    $LedgerId =$_POST['SearchId'];
                    $sql = "SELECT * FROM ledger WHERE Ledger_ID='$LedgerId'";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $LedgerId = $row['Ledger_ID'];
                            $Name = $row['Name'];
                            $Under = $row['Under'];
                            $OpenAmount = $row['Opening_Amount'];
        ?>
                            
                            <table class="table">
                                <tr>
                                    <th class="column">Ledger ID</th>
                                    <td class="column"><input type="text" name="LedgerId" id="LederId" class="inputs" value="<?php echo $LedgerId; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Name</th>
                                    <td class="column"><input type="text" name="Name" id="Name" class="inputs" value="<?php echo $Name; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Under</th>
                                    <td class="column"><input type="text" name="Under" id="Under" class="inputs" value="<?php echo $Under; ?>"></td>
                                </tr>
                                <tr>
                                    <th class="column">Opening Amount</th>
                                    <td class="column"><input type="text" name="OpenAmount" id="OpenAmount" class="inputs" value="<?php echo $OpenAmount; ?>"></td>
                                </tr>
                                
                            </table>
                            <table class="table">
                                <tr>
                                <td class="column"><input type="submit" value="Update" class="button"></td>
                                <td class="column"><button class="button"><a href='DeleteLedger.php?id=<?php echo $row['Ledger_ID']; ?>'>Delete</a></button></td>
                                </tr>
                            </table>
                        <?php    
                        }
                    } else {
                        echo "Empty data";
                    }
                }
        
            ?>
        </form>
    </div>
    <div>
        <?php include 'Footer.php'?>
    </div>
</body>
</html>