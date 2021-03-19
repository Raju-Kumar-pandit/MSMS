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
        <form action="" method="POST">
        <h1 class="h">New Ledger</h1>
            <table class="table">
                <tr>
                    <th class="column">Ledger ID</th>
                    <td class="column"><input type="text" name="LedgerId" id="LedgerId" class="inputs"></td>
                </tr>
                <tr>
                    <th class="column">Name</th>
                    <td class="column"><input type="text" name="Name" id="Nmae" class="inputs"></td>
                </tr>
                <tr>
                    <th class="column">Under</th>
                    <td class="column"><input type="text" name="Under" id="under" class="inputs"></td>
                </tr>
                <tr>
                    <th class="column">State Name</th>
                    <td class="column"><input type="text" name="StateName" id="StateName" class="inputs"></td>
                </tr>
                <tr>
                    <th class="column">City Name</th>
                    <td class="column"><input type="text" name="CityName" id="CityName" class="inputs"></td>
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