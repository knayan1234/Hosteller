<?php
$conn =mysqli_connect("localhost","root","","hostel_project");
	if($conn!=true)
	{
		echo "Connection failed.".mysqli_error($conn);
		exit();
	}
?>