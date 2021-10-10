<?php
    
    function queries(){
        include 'Connect.php';
        $sql = "SELECT Dues_Amount FROM sales";
        $result = $con->query($sql);
        if($result->num_rows >0){
        $row = $result->fetch_assoc();
        return $dues = $row["Dues_Amount"];
        }
    }

?>