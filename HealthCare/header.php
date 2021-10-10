<?php
    include 'Connect.php';
    $name="null";
    $sql=" SELECT Company_Name  FROM companyinfo";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {   
        $row = $result->fetch_assoc();
        $name = $row['Company_Name'];
    }
    session_start();

    if(!isset($_SESSION['Role'])){
        echo "<script>window.location.href='Login.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="color.css">
    <title>Header</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1><?php echo $name; ?></h1>
        </div>
        <div class="dropdwon">
            <button class="dropbtn">Admin 
                <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdwons">
                <a href="Admin.php">New Admin</a>
                <a href="EditAdmin.php">Edit Admin</a>
                <a href="AdminRecord.php">Show Details</a>
            </div>
        </div>
        <div class="dropdwon">
            <button class="dropbtn">Company
                 <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdwons">
                <a href="EditCompany.php">Edit Company</a>
                <a href="CompanyRecord.php">Show Details</a>
            </div>
        </div>
        <div class="dropdwon">
            <button class="dropbtn">Staff
                 <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdwons">
                <a href="Staff.php">New Staff</a>
                <a href="EditStaff.php">Edit Staff</a>
                <a href="StaffRecord.php">Show Details</a>
            </div>
        </div>
        <div class="dropdwon">
            <button class="dropbtn log"><a href="NewAccount.php">New Account</a></button>
        </div>
        <div class="dropdwon">
            <button class="dropbtn log"><a href="LogOut.php">LOGOUT</a></button>
        </div>
        
    </div>
</body>
</html>