<html>
    <head>
        <title>Dashbord</title>
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'Header.php'; ?>
        </div>
            <h1>Dashbord</h1>
            <?php
                include 'Connect.php';
                $sql = "SELECT sum(Quantity) AS quantity FROM stockitem";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $quantity = $row["quantity"];
                    echo '<div class="div12">';
                    echo "<h1>".$quantity ."</h1>";
                    echo '</div>';
                }
            ?>
    
        <div>
            <?php include 'Footer.php'; ?>
        </div>
    </body>
</html>