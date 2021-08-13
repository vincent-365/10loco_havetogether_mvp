<?php

$type = $_GET['type'];
$coffee = array(
"/bin/main_img/coffee/coffe_1.jpg",
"/bin/main_img/coffee/coffe_2.jpg",
"/bin/main_img/coffee/coffe_3.jpg",
"/bin/main_img/coffee/coffe_4.jpg",
"/bin/main_img/coffee/coffe_5.jpg",
"/bin/main_img/coffee/coffe_6.jpg",
"/bin/main_img/coffee/coffe_7.jpg",
"/bin/main_img/coffee/coffe_8.jpg",
"/bin/main_img/coffee/coffe_9.jpg",
"/bin/main_img/coffee/coffe_10.jpg"     
);


$eat = array(
     "/bin/main_img/eat/eat_1.jpg",
     "/bin/main_img/eat/eat_2.jpg",
     "/bin/main_img/eat/eat_3.jpg",
     "/bin/main_img/eat/eat_4.jpg",
     "/bin/main_img/eat/eat_5.jpg",
     "/bin/main_img/eat/eat_6.jpg",
     "/bin/main_img/eat/eat_7.jpg",
     "/bin/main_img/eat/eat_8.jpg",
     "/bin/main_img/eat/eat_9.jpg",
     "/bin/main_img/eat/eat_10.jpg"     
     );

if ($type == 'Meal'){
     echo json_encode($eat);
}elseif($type == 'Coffee'){
     echo json_encode($coffee);
}
