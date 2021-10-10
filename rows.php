<?php
$con =new mysqli("localhost","raju","Raju@123","test");
if($con->connect_error){
  die("Connection field".$con->connect_error);
} else {
  echo "connection successfully";
}

$name = $_POST["name"];
$mobile = $_POST["phone"];
foreach($name as $key =>$value){
  $sql = "INSERT INTO student (Name, Mobile) values('$name[$key]','$mobile[$key]')";
  if($con->query($sql)===TRUE)
  {
    echo"<script>alert('New data inserted Successfully')</script>";
  } else {
    echo $con->error;
  }
}
?>