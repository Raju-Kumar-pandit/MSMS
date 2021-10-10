

        <?php
            include 'Connect.php';
            
    
            $under = $_POST['Name'];

            $sql = "INSERT INTO under(Under_Name) VALUES ('$under')";
            if($con->query($sql)===TRUE){
                echo "<script>alert('Create Successfully');</script>";
                echo "<script>window.location.href='StockItem.php'</script>";
            } else {
               echo $con->error;
            }

        ?>
   