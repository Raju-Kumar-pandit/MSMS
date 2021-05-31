<?php
    include 'Connect.php';
    session_start();

    if(!isset($_SESSION['email'])){
        echo "<script>window.location.href='LogIn.php'</script>";
    }
?>
<html>
    <head>
        <title>Header</title>
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
    <?php 
        include 'Connect.php';

        $sql = "SELECT Company_Name FROM companyinfo";
        $result = $con->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo "<h1 class='h'>".$row['Company_Name']."</h1>";
        } else {

        }
    
    ?>
    
        <div class="header">
           
            <ul>
                <li>Dashbord
                    <ul>
                        <li>
                        <a href="Dashbord.php">Dashbord</a>
                        </li>
                    </ul>
                </li>
                <li>Company
                    <ul>
                        <li>
                            <a href="EditCompany.php">EditCompany</a>
                        </li>
                        <li>
                            <a href="CompanyRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Admin
                    <ul>
                        <li>
                            <a href="Admin.php">New Admin</a>
                        </li>
                        <li>
                            <a href="EditAdmin.php">Edit Admin</a>
                        </li>
                        <li>
                            <a href="AdminRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Staff
                    <ul>
                        <li>
                            <a href="Staff.php">New Staff</a>
                        </li>
                        <li>
                            <a href="EditStaff.php">Edit Staff</a>
                        </li>
                        <li>
                            <a href="StaffRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Ledger
                    <ul>
                        <li>
                            <a href="Newledger.php">New Ledger</a>
                        </li>
                        <li>
                            <a href="EditLedger.php">Edit Ledger</a>
                        </li>
                        <li>
                            <a href="LedgerRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Stock
                    <ul>
                        <li>
                            <a href="StockItem.php">New Stock Item</a>
                        </li>
                        <li>
                            <a href="EditStockItem.php">Edit Stock Item</a>
                        </li>
                        <li>
                            <a href="StockRecord.php">display Stock Item</a>
                        </li>
                    </ul>
                </li>
                <li> Customer
                    <ul>
                        <li>
                            <a href="Customer.php">New Customer</a>
                        </li>
                        <li>
                            <a href="EditCustomer.php">Edit Customer</a>
                        </li>
                        <li>
                            <a href="CustomerRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Sales
                    <ul>
                        <li>
                            <a href="Sales.php">New Sales Item</a>
                        </li>
                        <li>
                            <a href="EditSales.php">Edit Sales Item</a>
                        </li>
                        <li>
                            <a href="SalesRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Supplier
                    <ul>
                        <li>
                            <a href="Supplier.php">New Supplier</a>
                        </li>
                        <li>
                            <a href="EditSupplier.php">Edit Supplier</a>
                        </li>
                        <li>
                            <a href="SupplierRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Purchase
                    <ul>
                        <li>
                            <a href="Purchase.php">New Purchase</a>
                        </li>
                        <li>
                            <a href="EditPurchase.php">Edit Purchase</a>
                        </li>
                        <li>
                            <a href="#">New Order Item</a>
                        </li>
                        <li>
                            <a href="#">Edit Order Item</a>
                        </li>
                        <li>
                            <a href="PurchaseRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Receive 
                    <ul>
                        <li>
                            <a href="ReceivePayment.php">New Receive Payment</a>
                        </li>
                        <li>
                            <a href="EditReceivePayment.php">Edit Receive Payment</a>
                        </li>
                        <li>
                            <a href="ReceivePaymentRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Payment
                    <ul>
                        <li>
                            <a href="Payment.php">New Pament</a>
                        </li>
                        <li>
                            <a href="EditPayment.php">Edit Payment</a>
                        </li>
                        <li>
                            <a href="PaymentRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>OtherPayment
                    <ul>
                        <li>
                            <a href="OtherPayment.php">New Pament</a>
                        </li>
                        <li>
                            <a href="EditOtherPayment.php">Edit Payment</a>
                        </li>
                        <li>
                            <a href="OtherPaymentRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Return
                    <ul>
                        <li>
                            <a href="ReturnItem.php">New Return Item</a>
                        </li>
                        <li>
                            <a href="EditReturnItem.php">Edit Return Item</a>
                        </li>
                        <li>
                            <a href="ReturnRecord.php">display</a>
                        </li>
                    </ul>
                </li>
                <li>Reminder
                    <ul>
                        <li>
                            <a href="#">New Reminder</a>
                        </li>
                        <li>
                            <a href="#">Old Reminder</a>
                        </li>
                    </ul>
                </li>
                <li>GST
                    <ul>
                        <li>
                            <a href="#">New Payment</a>
                        </li>
                        <li>
                            <a href="#">Old Payment</a>
                        </li>
                    </ul>
                </li>
                <li>Reports
                    <ul>
                        <li>
                            <a href="#">Balance Sheet</a>
                        </li>
                        <li>
                            <a href="DayBook.php">Day Book</a>
                        </li>
                        <li>
                            <a href="#">Profit & lose</a>
                        </li>
                        <li>
                            <a href="StockSummary.php">Stock Summary</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="LogOut.php">Log Out</a>
                </li>
            </ul>
        </div>
    </body>
</html>