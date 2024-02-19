<?php
	include "header.php";
	$sid=$_GET['sid'];
	$sql="DELETE FROM addstudent WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'student details deleted';
		$delay =1;
		sleep($delay);
		  header("location:student_list.php");
	}else{
		echo'student details not deleted'.mysqli_error($conn);
	}
?>