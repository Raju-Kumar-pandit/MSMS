<?php
    $con = new mysqli("localhost","raju","Raju@123","msms");
    if($con->connect_error){
        die("Connection failed" .$con->connect_error);
    }

?>