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
if (isset($_FILES)) {
    $file = $_FILES["profile"];
    // print_r($file);
    $error = $file["error"];
    $name = $file["name"];
    $type = $file["type"];
    $size = $file["size"];
    $tmp_name = $file["tmp_name"];
    if ( $error > 0 ) {
        echo "Error: " . $error . "<br>";
    }
    else {
      echo "Upload: " . $name . "<br>";
      echo "Type: " . $type . "<br>";
      echo "Size: " . ($size/1024/1024) . " Mb<br>";
      echo "Stored in: " . $tmp_name;
    }
}
else {
    echo "File is not selected";
}
?>