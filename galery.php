<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <h1>galery</h1>
        <form action="" method="POST">
            <div>
                <table id="table-field">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="Name[]" id="" placeholder="Name"></td>
                        <td><input type="file" name="image" id="" multipart></td>
                        <td><input type="button" value="add" id="add"></td>
                    </tr>
                </table>
                <td><input type="submit" name="submits" value="submit"></td>
            </div>
        </form>
        <?php
$con =new mysqli("localhost","raju","Raju@123","test");
if($con->connect_error){
  die("Connection field".$con->connect_error);
} else {
  echo "connection successfully";
}

if(isset($_POST["submits"])){
    $name = $_POST["Name"];
    $image = $_FILES["image"]["name"];
foreach($image as $key => $value){
    $image=$_FILES["image"]["name"][$key];
    $imagepath ='img/'.$image;
    $temp = $_FILES["image"][$temp][$key];
    move_uploaded_file($temp, $imagepath);
  $sql = "INSERT INTO galery (Name, Image) values('$name[$key]')";
  if($con->query($sql)===TRUE)
  {
    echo"<script>alert('New data inserted Successfully')</script>";
  } else {
    echo "error".$con->$sql. "hi".$con->error;
  }
}
}
?>
<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Image</th>
        </tr>
        <tr>
            <?php 
                $sql = "SELECT * FROM galery";
                $result = $con->query($sql);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        $name = $row["Name"];
                        $image = $row["Image"];
                        ?>
                            <td><?php echo $name; ?></td>
                            <td><img src="img/<?php echo $image ?>" alt="" width="100px" height="100px"></td>
                        <?php
                    }
                }
            ?>
        </tr>
    </table>
</div>
    </div>
    <script>
        $(document).ready(function(){
            var html = '<tr><td><input type="text" name="Name[]" id="" placeholder="Name"></td><td><input type="file" name="image[]" id=""></td><td><input type="button" value="remove" id="remove"></td></tr>';
        
        var x=1;
        $("#add").click(function(){
            $("#table-field").append(html);
        });
        $("#table-field").on('click','#remove',function(){
            $(this).closest('tr').remove();
        });
        
        });
    </script>
</body>
</html>