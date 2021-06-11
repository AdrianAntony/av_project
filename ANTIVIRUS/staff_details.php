<?php
include("header1.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
			<h2 class="text-center pb-4 "><u>FACULTY TABLE</u></h2>
              
               <?php
			   include("db/connection.php");
			   
			   if($_REQUEST['del_id']!='')
			   {
			   mysqli_query($con, "delete from faculty where id='$_REQUEST[del_id]'") or die("Error in Selecting " . mysqli_error($con));
			   
			//    echo "<div class='alert alert-danger'>Data Deleted Successfully</div>";
			   }
			   
			   echo "<table class='table'>";
			   
			   	echo "<tr class='font-weight-bold'>
		<td>  Name </td>
		<td>  Mobile </td>
		<td>  Username </td>
		
		<td>  Course </td>
		<td>  Privilege </td>
			
		<td>  Delete </td>
		
		</tr>";
			   	  $sql2 = "select *  from faculty";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($con));

    while($row2 =mysqli_fetch_array($result2))
    {
		echo "<tr>
		<td>  $row2[name] </td>
		<td>  $row2[mobile] </td>
		<td>  $row2[username] </td>
		<td>  $row2[course] </td>
		
		<td>  $row2[privilege] </td>
		
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
