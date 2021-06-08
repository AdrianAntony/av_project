  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<?php
// Define a function to output files in a directory

 
// Call the function
$dir="ANTIVIRUS";
//echo outputFiles($dir);














 function get_all_directory_and_files($dir){
 $dir2="";
     $dh = new DirectoryIterator($dir);   
     // Dirctary object 
     foreach ($dh as $item) {
		 //echo "<h3>$item</h3>";
         if (!$item->isDot()) {
            if ($item->isDir()) {
                get_all_directory_and_files("$dir/$item");
            } else {
				
				if($dir!=$dir2)
				{
					echo "<h2><img src='icon/F.jpeg' height='60'>";
					echo "$dir</h2>";
				}
				$ext=explode(".",$item->getFilename());
				$count=count($ext)-1;
				$extension=$ext[$count];
				
				if($extension=="jpg" || $extension=="png")
				echo "<img src='icon/J.jpeg' height='20'>";
				
				
				if($extension=="txt" || $extension=="bat" )
				echo "<img src='icon/V.jpeg' height='60'>";
				
				
				
				
				
				
				
				
				$file=$dir . "/" . $item->getFilename();
                echo "<a href='$file' target='_blank'>".$item->getFilename()."</a>";
				
				$hash=hash_file('md5', $file);
				echo " &nbsp;&nbsp;&nbsp; ".$hash." &nbsp;&nbsp;&nbsp; ";
				
$marks = array('26f44f14f1587a23ba08ce7206bcb77c', '9b6b00fe8ecb35176b06555b7e67ade7', 70, 87);
  
if (in_array($hash, $marks))
  {
  	echo "<span class='badge alert-danger'>Virus Found</span>";
  }
else
  {
  //echo "not found";
  }
				
				
				
				
				if($extension=="txt" || $extension=="bat")
				echo "<span class='badge alert-danger'>Virus Found</span>";
			   else
				echo "<span class='badge alert-success'>$extension</span>";
				
				
				
				
				
				
				
				
                echo "<br>";
            }
			$dir2=$dir;
         }
      }
   }
 
  # Call function 
  
  get_all_directory_and_files($dir);









?>
