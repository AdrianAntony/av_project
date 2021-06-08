<?php
include("db/connection.php");
mysqli_query($con,"insert into faculty (name,mobile,email_id,password,course,privilege) value ('$_POST[name]','$_POST[mobile]','$_POST[email_id]','$_POST[password]','$_POST[course]','$_POST[privilege]')");
header("location:faculty_form.php?a=1");
?>