<?php
include("header1.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
              <h1>Upload Exam Files</h1>
			  
			  <form enctype="multipart/form-data" action="exam_uploader.php" method="POST">

Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
			  
			  
			  
			  
			  
			  
			  <?php
			  include("db/connection.php");
			  echo "<table class='table'>";
			  	  $sql2 = "select *  from sd_file where username='$_SESSION[login_user]' and category='exam' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
while($row2 =mysqli_fetch_array($result2))
{
	echo "<tr><td><a href='$row2[file]' target='_blank'>My File $row2[file]</a></td></tr> ";
}
echo "</table>";
			  
			  
			  
			  ?>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
        </div>
        <!-- Feature End -->


        <!-- Footer Start -->
       
<?php
include("footer.php");

?>