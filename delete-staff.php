<?php
	include "connect.php";
	$sid=$_GET['sid'];
	$sql="DELETE FROM scl_staff WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'staff details deleted';
		$delay =1;
		sleep($delay);
		  header("location:staff_data.php");
	}else{
		echo'staff details not deleted'.mysqli_error($conn);
	}
?>