<?php
session_start();

include("db/connection.php");
$target_path = "uploads/";

$target_path = $target_path . date("Y-m-d-h-i-s").basename( $_FILES['uploadedfile']['name']); 
				$ext=explode(".",basename( $_FILES['uploadedfile']['name']));
				$count=count($ext)-1;
				$extension=$ext[$count];
				
				if($extension=="jpg" || $extension=="png" || $extension=="pdf")
				{
				echo "<img src='icon/J.jpeg' height='20'>";
				move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
				mysqli_query($con,"insert into sd_file (file,username,category) value ('$target_path','$_SESSION[login_user]','certificate')");
				header("location:cert_upload.php");
				}
else {





$file=$target_path;
               // echo "<a href='$file' target='_blank'>".date("Y-m-d-h-i-s").basename( $_FILES['uploadedfile']['name'])."</a>";
				
				$hash=hash_file('md5', $file);
		
				
$marks = array('26f44f14f1587a23ba08ce7206bcb77c', '9b6b00fe8ecb35176b06555b7e67ade7', 70, 87);
  
if (in_array($hash, $marks))
  {
  	echo "<span class='badge alert-danger'>Virus Found</span>";
	unlink($file);
  }
else
  {
  //echo "not found";
  }




















header("location:cert_upload.php?status=virus found");
}
?>