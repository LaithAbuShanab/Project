<?php
session_start();



$target_dir = "uploads";
$target_file = $target_dir . basename($_FILES["img_user"]["name"]);
move_uploaded_file($_FILES["img_user"]["tmp_name"], $target_file);
$_POST['img_user']= $target_file; 






$cv_info=json_decode(file_get_contents('./file.json'));
$cv_info[]= $_POST;


$cvId = $_POST['ID'];


file_put_contents('./file.json',json_encode(($cv_info)));



header("location:./view/index.php?id=$cvId");
