<?php
	include "header.php";
	$sid=$_GET['sid'];
	$sql="DELETE FROM scl_dailyspend WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'spend details deleted';
		$delay =1;
		sleep($delay);
		  header("location:home.php");
	}else{
		echo'spend details not deleted'.mysqli_error($conn);
	}
?>