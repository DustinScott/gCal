<?php include("includes/ewp.php");
	
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$service = $_POST['choose_service'];
$provider = $_POST['choose_provider'];
$when = $_POST['When'];

$newappointment = mysqli_query($con, "INSERT INTO gcal(f_name,l_name,service,provider,date) VALUES('$f_name','$l_name','$service','$provider','$when')");

if($newappointment){

	echo '<div style="position:absolute; width:100%; height:100%; background:#fff; z-index:10;">
	
	<div style="position:relative; width:400px; margin:0 auto; background:#00;">
	
	<h5>Thank You! '.$f_name.' '.$l_name.'</h5>
	
	<p>We have added to  '.$provider.'\'s calendar, that you have requested '.$service.' on '.$when.' </p>
	
	<p>He will be calling you shortly</p>
	
	 <a href="index.php">X</a>
	</div>
	
	
	</div>';
	
}
	 
?> 