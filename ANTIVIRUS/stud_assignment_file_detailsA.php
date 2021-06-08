<?php
include("header1.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        
<script>


function rem()
{
if(confirm('Are you sure you want to delete this record?')){
return true;
}
else
{
return false;
}
}
</script>
        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
			<h2 class="text-center pb-4 "><u>SUBMITTED ASSIGNMENTS</u></h2>
              
               <?php
			   include("db/connection.php");
			   
			   if($_REQUEST['del_id']!='')
			   {
			   mysqli_query($con, "delete from sd_file where id='$_REQUEST[del_id]'") or die("Error in Selecting " . mysqli_error($con));
			   
			//    echo "<div class='alert alert-danger'>Data Deleted SUccessfully</div>";
			   }
			   
			   echo "<table class='table'>";
			   
			   	echo "<tr class='font-weight-bold'>
		<td>  Name </td>
		<td>  Username </td>
		
		<td>  Date & Time </td>
			<td>  Download Files</td>
		<td>  Delete Files </td>
		
		</tr>";
			   	//   $sql2 = "select *  from sd_file where category='student assignment'";
				   $sql2 = "select *  from sd_file where category='assignment'";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($con));

    while($row2 =mysqli_fetch_array($result2))
    {
		echo "<tr>
		<td>  $row2[file] </td>
		<td>  $row2[username] </td>
		
		<td>  $row2[date_upload] </td>
		<td> <a class='btn btn-secondary' href='$row2[file]' download>Download</a> </td>
		<td> <a class='btn btn-danger' href='?del_id=$row2[id]' onclick='return rem()'>Del</a> </td>
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