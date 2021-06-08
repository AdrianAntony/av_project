<?php
include("db/connection.php");
mysqli_query($con,"insert into register (name,username,password,course) value ('$_POST[name]','$_POST[username]','$_POST[password]','$_POST[course]')");
header("location:student_form.php?a=1");
?>