<?php
include("header2.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container col-md-3">
              <h1>Upload Files</h1>
			  
              <form enctype="multipart/form-data" action="ass_uploader.php" class="mt-4" method="POST">
              <div class="form-gruop">
                <label class="font-weight-light" style="color:black;">Choose a file to upload</label> 
                <input name="uploadedfile" class=" rounded border border-secondary p-1" type="file" />
              </div>
              
              <div class="form-group mt-3">
                <input type="submit" class="btn btn-success" value="Upload File" />
              </div>
                </form>
			  
			  
			  
			  
			  
			  
			  <?php
			  include("db/connection.php");
			  echo "<table class='table' border=1>";
			  	  $sql2 = "select *  from sd_file where username='$_SESSION[login_user]' and category='student file upload' ";
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
