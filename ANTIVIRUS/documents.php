<?php
include("header1.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
            <h2 class="text-center pb-4 "><u>UPLOADED DOCUMENTS</u></h2>
              
               <?php
			   include("db/connection.php");
			   
			   if($_REQUEST['del_id']!='')
			   {
			   mysqli_query($con, "delete from sd_file where id='$_REQUEST[del_id]'") or die("Error in Selecting " . mysqli_error($con));
			   
			//    echo "<div class='alert alert-danger'>Data Deleted SUccessfully</div>";
			   }
			   
			   echo "<table class='table'>";
			   
			   	echo "<tr class='font-weight-bold'>
		<td> File Name </td>
		<td>  Uploaded By </td>
		
		<td>  Date & Time </td>
		<td> Download File</td>
		<td>  Delete File</td>
		
		</tr>";
			   	  $sql2 = "select *  from sd_file where category='certificate'";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($con));

    while($row2 =mysqli_fetch_array($result2))
    {
		echo "<tr>
		<td>  $row2[file] </td>
		<td>  $row2[username] </td>
		
		<td>  $row2[date_upload] </td>
		<td> <a class='btn btn-secondary' href='$row2[file]' download>Download</a> </td>
		<td> <a class='btn btn-danger' href='?del_id=$row2[id]'>Del</a> </td>
		</tr>";
	}
	echo "</table>";
			   
			   ?>
            </div>
        </div>
        <!-- Service End -->


        


        <!-- Footer Start -->
       
<?php
include("footer.php");

?>