<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Receipe</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            border: 1px dotted black;
            text-align: center;
        }
        table{
            width: 100%;
            border: 1px solid red;
            border-collapse: collapse;
        }
        th, td{
            border: 1px solid green;
        }
        .container{
            width: 95%;
            height: auto;
            display: grid;
            margin: auto;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(7,auto);
        }
        .div1{
            grid-column: 1/-1;
        }
        .div2{
            grid-column: 1/7;
        
        }
        .div3{
            grid-column: 7/13;
            grid-row: 2/3;
        }
        .div21{
            grid-column: 1/7;
        
        }
        .div31{
            grid-column: 7/13;
            grid-row: 3/4;
        }
        .div4{
            grid-column: 1/3;
        }
        .div6{
            grid-column: 1/-1;
            text-align: left;
        }
        .span6{
            text-align: right;
            margin-left: 90%;
            border: none;
        }
    </style>
</head>
<body>
    <!-- <div class="containers">
        <table >
            <tr>
                <th>Company Name</th>
            </tr>
            <tr>
                <th class="rows">Sales ID</th>
                <th class="rows">Customer ID</th>
            </tr>
            <tr>
                <th class="rows">Date</th>
                <th class="rows">Mode</th> 
            </tr>
            <tr class="th">
                <th class="rows">Item Name</th>
                <th class="rows">Batch No</th>
                <th class="rows">Quantity</th>
                <th class="rows">Rate</th>
                <th class="rows">ActualAmt</th>
                <th class="rows">Discount</th>
                <th class="rows">SGSTP</th>
                <th class="rows">SGST</th>
                <th class="rows">CGSTP</th>
                <th class="rows">CGST</th>
                <th class="rows">Amount</th>
                <th class="rows">Delete</th>
            </tr>
            <tr></tr>
            <tr>
                <th class="rows">Total Amount</th>
            </tr>
            <tr>
                <th class="rows">PayAmount</th>
            </tr>
            <tr>
                <th class="rows">Dues Amount</th>
            </tr>
        </table>
    </div> -->
    <div class="container">
        <div class="div1">
            <?php
                include 'Connect.php';
                $sql = "SELECT * FROM companyinfo order by Company_Name DESC";
                $resut = $con->query($sql);
                if($resut->num_rows > 0){
                    $row = $resut->fetch_assoc();
                    $Name = $row['Company_Name'];
                } else {
                    $Name ="data not found!";
                }
            ?>
            <h1><?php echo $Name; ?></h1>
        </div>
        <?php
                include 'Connect.php';
                $sql = "SELECT * FROM sales order by Sales_ID DESC";
                $resut = $con->query($sql);
                if($resut->num_rows > 0){
                    $row = $resut->fetch_assoc();
                    $Sales_ID = $row['Sales_ID'];
                    $Date = $row['Date'];
                    $Customer = $row['Customer_ID'];
                    $Mode = $row['Mode'];
                    $TotalAmount = $row['Total_Amount'];
                    $PayAmount = $row['Pay_Amount'];
                    $DuesAmount = $row['Dues_Amount'];
                    
                } else {
                    $Name ="data not found!";
                }
            ?>
        <div class="div2">Sales ID : <?php echo $Sales_ID; ?></div>
        <div class="div3">Date :  <?php echo $Date; ?></div>
        <div class="div21">Customer ID :  <?php echo $Customer; ?></div>
        <div class="div31">Mode :  <?php echo $Mode; ?></div>
        <div class="div4">Item Name
            <p>paracitamol</p>
            <p>combiflam</p>
        </div>
        <div class="div5">Batch No</div>
        <div class="div5">Quantity</div>
        <div class="div5">Rate</div>
        <div class="div5">Actual Amount</div>
        <div class="div5">Discount</div>
        <div class="div5">SGST%</div>
        <div class="div5">SGST</div>
        <div class="div5">CGST%</div>
        <div class="div5">CGST</div>
        <div class="div5">Amount</div>
        <div class="div6">Total Amount: <span class="span6"><?php echo $TotalAmount; ?></span></div>
        <div class="div6">Paid Amount: <span class="span6"> <?php echo $PayAmount; ?></span></div>
        <div class="div6">Dues Amount: <span class="span6"><?php echo $DuesAmount; ?></span></div>
        <div class="div6">E.O.F:</div>

    </div>
</body>
</html>