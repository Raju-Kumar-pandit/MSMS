<?php
       $con = new mysqli("localhost","raju","Raju@123","test");
       if($con->connect_error){
           die("Connection failed".$con->connect_error);
       } 
        $Batch = $_POST["BatchName"];
        $Subject = $_POST["SubjectName"];
        $Class = $_POST["ClassName"];
        $Admin = $_POST["AdminName"];

        $sql = "INSERT INTO class(Batch_Name,Subject_Name,Class_Name,Admin_Name)
        VALUES ('$Batch','$Subject','$Class','$Admin')";
        if($con->query($sql)===TRUE){
            echo "<script>alert('New Batch Create Successfully!')</script>";
            echo "<script>window.location.href='Menu.php'</script>";
        } else {
            echo "<script>alert('New Batch Not Create Successfully!')</script>";
            echo "<script>window.location.href='form.php'</script>";
        }
?>