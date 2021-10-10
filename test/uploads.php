<?php
$target_dir ="MSMS/test/image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    

    $check = $_FILES["fileToUpload"]["tmp_name"];
  if($check !== false) {
    echo "File is an image - " . $target_file;
    echo "hello" .$check;
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  move_uploaded_file($check,"MSMS/test/image/".$target_file);
}

?>