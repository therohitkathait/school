<?php
	include "connect.php";
	$sid=$_GET['sid'];
	$sql="DELETE FROM marksheet WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'marksheet details deleted';
		$delay =1;
		sleep($delay);
		  header("location:student_marksheet.php");
	}else{
		echo'marksheet details not deleted'.mysqli_error($conn);
	}
?>