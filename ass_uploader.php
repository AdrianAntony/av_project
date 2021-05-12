<?php
session_start();

include("db/connection.php");
$target_path = "uploads/";

$target_path = $target_path . date("Y-m-d-h-i-s").basename( $_FILES['uploadedfile']['name']); 

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
mysqli_query($con,"insert into sd_file (file,username,category) value ('$target_path','$_SESSION[login_user]','assignment')");


header("location:ass_upload.php");
?>