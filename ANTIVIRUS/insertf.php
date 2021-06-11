<?php
include("db/connection.php");
mysqli_query($con,"insert into faculty (name,mobile,username,password,course,privilege) value ('$_POST[name]','$_POST[mobile]','$_POST[username]','$_POST[password]','$_POST[course]','$_POST[privilege]')");
header("location:faculty_form.php?a=1");
?>