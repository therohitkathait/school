<?php
	include "connect.php";
	$sid=$_GET['sid'];
	$sql="DELETE FROM scl_tranfees WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'fees details deleted';
		$delay =1;
		sleep($delay);
		  header("location:home.php");
	}else{
		echo'fees details not deleted'.mysqli_error($conn);
	}
?>