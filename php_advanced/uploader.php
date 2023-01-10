<?php

$target_dir = "image_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
        } else {
             echo "File is not an image.";
             $uploadOk = 0;
        }
}
if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" ) {
  echo "Invalid File Type.";
      $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo "File is too large.";
  $uploadOk = 0;
}
if (file_exists($target_file)) {
  echo "File already exists";
  $uploadOk = 0;
}