<?php
session_start();

include("db/connection.php");
$target_path = "uploads/";

$target_path = $target_path . date("Y-m-d-h-i-s").basename( $_FILES['uploadedfile']['name']); 

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);



$ext=explode(".",$target_path);
$count=count($ext)-1;
$extension=$ext[$count];

$hash=hash_file('md5', $target_path);

				
$marks = array('009baf77b4e47844f520756f03874ca3', '9b6b00fe8ecb35176b06555b7e67ade7', 70, 87);
  
if (in_array($hash, $marks))
  {
  	header("location:ass_upload.php?status=virus");
  }
else
  {
  //echo "not found";
  if($extension=="txt" || $extension=="bat" || $extension=="exe")
header("location:ass_upload.php?status=virus");
  else
  {	  




mysqli_query($con,"insert into sd_file (file,username,category) value ('$target_path','$_SESSION[login_user]','assignment')");


header("location:ass_upload.php?a=1");
}
  }
				
				
				
				
				











?>