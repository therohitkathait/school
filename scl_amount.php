<?php
	include "connect.php";
	$sid=$_GET['sid'];
	$sql="DELETE FROM scl_addfees WHERE id='$sid'";
	
	if(mysqli_query($conn,$sql)){
		echo'fees details deleted';
	}else{
		echo'fees details not deleted'.mysqli_error($conn);
	}
?>