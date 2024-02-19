<?php
	include "header.php";
	$sid=$_GET['sidf'];
	$sql="DELETE FROM socialqualitie WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'student marks deleted';
		$delay =1;
		sleep($delay);
		  header("location:add_marksheet.php");
	}else{
		echo'student marks not deleted'.mysqli_error($conn);
	}
?>