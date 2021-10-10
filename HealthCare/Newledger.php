<?php
    include 'Connect.php';

    $LedgerId = NULL;
    $sql ="SELECT Ledger_ID FROM ledger order by Ledger_ID DESC LIMIT 1";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        $row= $result->fetch_assoc();
        $LedgerId = $row["Ledger_ID"];
        $LedgerId = substr($LedgerId, 1);
        $LedgerId = $LedgerId + 1;
        if($LedgerId < 10)
        {
            $LedgerId = "L0000$LedgerId";
           
        } 
        else
        {
            $CustomerId = "L000$LedgerId";   
        }
        
    }
    else
    {
        $LedgerId = "L00001";
    }
    

    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ledger</title>
    <link rel="stylesheet" href="colors.css">
</head>
<body>
    <div>
        <?php include 'header1.php' ?>
    </div>
    <div>
            <?php include 'Menu1.php'?>
    </div>
    <div class="divs">
        <form action="NewLedgerconnection.php" method="POST">
        <h1 class="h">New Ledger</h1>
            <table class="table">
                <tr>
                    <th class="column">Ledger ID</th>
                    <td class="column"><input type="text" name="LedgerId" id="LedgerId" class="inputs" value="<?php echo $LedgerId; ?>" readonly></td>
                </tr>
                <tr>
                    <th class="column">Name</th>
                    <td class="column"><input type="text" name="Name" id="Nmae" class="inputs"></td>
                </tr>
                <tr>
                    <th class="column">Under</th>
                    <td class="column"><input type="text" list="Unders" name="Under" id="under" class="inputs">
                        <datalist id="Unders">
                        <?php
                        include 'Connect.php';

                        $sql = "SELECT * FROM underGroup";
                        $result = $con->query($sql);
                        if($result->num_rows > 0){
                            while($row= $result->fetch_array()){
                                $name = $row["Name"];
                                echo "<option value='$name'></option>";
                            }
                        }
                        $con->close();
                        ?>
                        </datalist>
                    </td>
                </tr>
                <tr>
                    <th class="column">Opening Amount</th>
                    <td class="column"><input type="text" name="OpenAmount" id="OpenAmount" class="inputs" ></td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <td class="column"><input type="submit" value="Create Ledger" class="button"></td>
                </tr>
            </table>
        </form>
    </div>
    <div>
        <?php include 'footer.php'; ?> 
    </div>
</body>
</html>