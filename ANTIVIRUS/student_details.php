<?php
include("header1.php");
?>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
     
        <!-- Nav Bar End -->
        

        <!-- Service Start -->
        <div class="service mt-125">
            <div class="container">
			<h2 class="text-center pb-4 "><u>STUDENT TABLE</u></h2>
              
               <?php
			   include("db/connection.php");
			   
			   if (isset($_REQUEST['del']) && $_REQUEST['del']) {
					mysqli_query($con, "delete from register where id='$_REQUEST[del]'") or die("Error in Selecting " . mysqli_error($con));
					
					echo "<div class='alert alert-danger'>Data Deleted SUccessfully</div>";
					header('location: '.$_SERVER['PHP_SELF']);
					exit(); //optional
			   }
			   
			   echo "<table class='table'>";
			   
			   	echo "<thead class='thead-light'>

				   <tr class='font-weight-bold'>
		<td>  Name </td>
		<td>  Username </td>
		
		<td>  Course </td>
			
		<td>  Delete </td>
		
		</tr>
				   </thead>";
			   	  $sql2 = "select *  from register";
    $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($con));
    while($row2 =mysqli_fetch_array($result2))
    {
		
		echo "<tr>
		
		<td>  $row2[name] </td>
		<td>  $row2[username] </td>
		
		<td>  $row2[course] </td>
		
		<td> <a class='btn btn-danger' href='?del=$row2[id]'>Del</a> </td>
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
