<?php  
$myip=$_SERVER['REMOTE_ADDR'];

echo "<h4>My IP $myip</h4>";

$ip = array("192.168.2.1", "::1");

foreach ($ip as $value) {
	
	
	if($myip>$value)
		echo "Attack Founded <br>";
	
}













function sqlin($data)
{
	
	$inj = array("Select", "1=1", "all", "delete");

foreach ($inj as $value) {
	
	similar_text($data,$value,$percent);
	//echo "Percent :".$percent."<br>";
	if($percent>70)
		echo "Attack Founded <br>";
	
}
	
	
}
foreach($_REQUEST as $key => $value)
{
    // $key will be the name
    // $value will be the value of $_POST[$key
	sqlin($_REQUEST[$key]);
	echo "Variable ::".$_REQUEST[$key]."<br>";
}


/*
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    echo $url;  
	*/
  ?>   