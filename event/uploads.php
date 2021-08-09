<?php

$type = $_GET['type'];
$main_img = $_GET['main_img'];
$participants = $_GET['participants'];
$event_naem = $_GET['event_naem'];
$date = $_GET['date'];
$time = $_GET['time'];
$describe = $_GET['describe'];
$address = $_GET['address'];
$location = $_GET['location'];
$name = $_GET['name'];
$organizerdet = $_GET['organizerdet'];
$file = $_FILES["profile"];

print_r($profile);

?>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["profile"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>