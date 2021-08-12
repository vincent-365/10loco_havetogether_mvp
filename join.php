<?php
include 'data/dbconfig.php';
$id = $_GET['id'];
$name = $_GET['name'];

$query = "SELECT * FROM ht_event WHERE event_id = $id";
$result = $havetohere_db->query($query);

$row = $result->fetch_array(MYSQLI_ASSOC);
$r = $row['event_part_pel'];
$event_participants = $row['event_participants'];
$ss = explode(",", $r);
$count_r = count($ss);
$pel = $r.",".$name;
if ($count_r == $event_participants){
     echo "It's full of people";
}else{
     $sql = "UPDATE `ht_event` SET `event_part_pel` = '$pel' WHERE `ht_event`.`event_id` = '$id';";
     $result = $havetohere_db->query($sql);
     echo "Your application has been completed";
}
?>