<?php
include("header3.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
              
               <?php
			   include("db/connection.php");
			   
			   if($_REQUEST['del_id']!='')
			   {
			   mysqli_query($con, "delete from register where id='$_REQUEST[del_id]'") or die("Error in Selecting " . mysqli_error($con));
			   
			   echo "<div class='alert alert-danger'>Data Deleted SUccessfully</div>";
			   }
			   
			   echo "<table class='table'>";
			   
			   	echo "<tr>
		<td>  Name </td>
		<td>  Username </td>
		
		<td>  Course </td>
			
		<td>  Del </td>
		
		</tr>";
			   	  $sql2 = "select *  from register";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($con));

    while($row2 =mysqli_fetch_array($result2))
    {
		echo "<tr>
		<td>  $row2[name] </td>
		<td>  $row2[username] </td>
		
		<td>  $row2[course] </td>
		
		<td> <a href='?del_id=$row2[id]'>Del</a> </td>
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
