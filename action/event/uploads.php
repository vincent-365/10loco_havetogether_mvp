<?php
include("../../head.php");

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
$event_org_name_2 = $event_org_name;
echo $event_org_name_2;

$allowedExts = array("gif", "jpeg", "jpg", "png");
if (isset($_FILES)) {
    $file = $_FILES["profile"];
    $error = $file["error"];
    $name = $file["name"];
    $type = $file["type"];
    $size = $file["size"];
    $tmp_name = $file["tmp_name"];
   
    if ( $error > 0 ) {
        echo "Error: " . $error . "<br>";
    }
    else {
        $temp = explode(".", $name);
        $extension = end($temp);
        $event_organizer = "../../uploads/" . $name;
        if ( ($size/1024/1024) < 10. && in_array($extension, $allowedExts) ) {
            if (file_exists("../../uploads/" . $name)) {
                $event_organizer = "../../uploads/" . $name;
              }
            else {
                move_uploaded_file($tmp_name, "../../uploads/" . $name);
                $event_organizer = "../../uploads/" . $name;
            }
        }
        else {
            echo ($size/1024/1024) . " Mbyte is bigger than 2 Mb ";
            echo $extension . "format file is not allowed to uploads ! ";
        }
    }
}
else {
    echo "File is not selected";
}

$sql = "INSERT INTO `ht_event`(`event_id`, `event_name`, `event_type`, `date`, `time`, `event_participants`,`event_part_pel`, `main_img`, `event_details`, `event_location`, `location_x`, `location_y`, `location_details`, `event_organizer`, `organizer_name`, `organizer_details`) VALUES ('0','$event_name','$event_type','$event_date','$event_time','$event_particpants','$event_org_name_2','$event_main_img','$event_event_details','$event_location','$event_x','$event_y','$event_loc_details','$event_organizer','$event_org_name','$event_org_details')";

$result = $havetohere_db->query($sql);
print_r(mysqli_insert_id($havetohere_db));

//header('Location: /meet/?id='.mysqli_insert_id($havetohere_db));
?>
