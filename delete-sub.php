<?php
	include "connect.php";
	$sid=$_GET['sid'];
	$sql="DELETE FROM subject WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'subject deleted';
		$delay =1;
		sleep($delay);
		  header("location:setting.php");
	}else{
		echo'subject not deleted'.mysqli_error($conn);
	}
?>