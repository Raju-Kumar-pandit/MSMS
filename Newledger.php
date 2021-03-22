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
        <?php include 'Header.php' ?>
    </div>
    <div>
        <form action="NewLedgerconnection.php" method="POST">
        <h1 class="h">New Ledger</h1>
            <table class="table">
                <tr>
                    <th class="column">Ledger ID</th>
                    <td class="column"><input type="text" name="LedgerId" id="LedgerId" class="inputs" value="<?php echo $LedgerId; ?>"></td>
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
                                echo "<option value=".$name."></option>";
                            }
                        }
                        ?>
                        </datalist>
                    </td>
                </tr>
                <tr>
                    <th class="column">State Nmae</th>
                        <td class="column"><select name="StateName" id="StateName" class="inputs">
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Gujrat">Gujrat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Manipur">Manipur</option>
                        </select>
                     </td>
                </tr>
                <tr>
                    <th class="column">City Name</th>
                    <td class="column"><select name="CityName" id="CityName" class="inputs">
                        <option value="Arwal">Arwal</option>
                        <option value="Bhagalpur">Bhagalpur</option>
                        <option value="Bhojpur">Bhojpur</option>
                        <option value="Muzaffarpur">Muzaffarpur</option>
                        <option value="Nalanda">Nalanda</option>
                        <option value="Patna">Patna</option>
                        <option value="Vaishali">Vaishali</option>
                        </select>
                        </td>
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
        <?php include 'Footer.php'; ?> 
    </div>
</body>
</html>