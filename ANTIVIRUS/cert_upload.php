<?php
include("header1.php");





error_reporting(0);
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
			<?php
			if($_REQUEST['status']!="")
			{
				echo "<div class='alert alert-danger'>virus found</div>";
			}
			if($_REQUEST['a']==1)
			{
			echo "<div class='alert alert-success'>File Uploaded Successfully</div>";
			}
			
			
			
			
			
			
			include("../funcIn.php");
			
			
			
			
			?>
              <h1 class="pt-4">Upload Certificate Files</h1>
			  
			  <form enctype="multipart/form-data" action="cert_uploader.php" method="POST">

Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
			  
			  
			  
			  
			  
			  
			  <?php
			  include("db/connection.php");
			  echo "<table class='table'>";
			  mysqli_query($con, "delete FROM sd_file where id='$_REQUEST[del]'");
			  	  $sql2 = "select *  from sd_file where username='$_SESSION[login_user]' and category='document' ";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
while($row2 =mysqli_fetch_array($result2))
{
	echo "<tr><td><a href='$row2[file]' target='_blank'>My File $row2[file]</a></td><td><a href='?del=$row2[id]'>delete</a></td></tr> ";

	
				 
		
}

echo "</table>";
			  
			  
			  
			  ?>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
        </div>
        <!-- Feature End -->


        <!-- Footer Start -->
       
<?php
include("footer.php");

?>
