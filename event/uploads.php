<?php
include("../head.php");

$event_name = $_POST['event_naem'];
$event_type = $_POST['type'];
$event_date = $_POST['date'];
$event_time = $_POST['time'];
$event_particpants = $_POST['participants'];
$event_main_img = $_POST['main_img'];
$event_event_details = $_POST['describe'];
$event_location = $_POST['address'];
$event_x = $_POST['event_x'];
$event_y = $_POST['event_y'];
$event_loc_details = $_POST['location'];
$event_org_name = $_POST['name'];
$event_org_details = $_POST['organizerdet'];


$allowedExts = array("gif", "jpeg", "jpg", "png");
if (isset($_FILES)) {
    $file = $_FILES["profile"];
    print_R($file);
    $error = $file["error"];
    print_R($error);
    $name = $file["name"];
    print_R($name);
    $type = $file["type"];
    print_R($type);
    $size = $file["size"];
    print_R($size);
    $tmp_name = $file["tmp_name"];
   
    if ( $error > 0 ) {
        echo "Error: " . $error . "<br>";
    }
    else {
        $temp = explode(".", $name);
        $extension = end($temp);
        $event_organizer = "../upload/" . $name;
        if ( ($size/1024/1024) < 10. && in_array($extension, $allowedExts) ) {
            if (file_exists("../upload/" . $name)) {
                echo $name . " already exists. ";
                $event_organizer = "../upload/" . $name;
              }
            else {
                move_uploaded_file($tmp_name, "../upload/" . $name);
                $event_organizer = "../upload/" . $name;
            }
        }
        else {
            echo ($size/1024/1024) . " Mbyte is bigger than 2 Mb ";
            echo $extension . "format file is not allowed to upload ! ";
        }
    }
}
else {
    echo "File is not selected";
}

$sql = "INSERT INTO `ht_event`(`event_id`, `event_name`, `event_type`, `date`, `time`, `event_participants`,`event_part_pel`, `main_img`, `event_details`, `event_location`, `location_x`, `location_y`, `location_details`, `event_organizer`, `organizer_name`, `organizer_details`) VALUES ('0','$event_name','$event_type','$event_date','$event_time','$event_particpants','','$event_main_img','$event_event_details','$event_location','$event_x','$event_y','$event_loc_details','$event_organizer','$event_org_name','$event_org_details')";

$result = $havetohere_db->query($sql);
print_r(mysqli_insert_id($havetohere_db));

//header('Location: /meet.php?id='.mysqli_insert_id($havetohere_db));
?>
