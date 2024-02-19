
<h3>Update School Details</h3>
<?php
	$msg='';
	$email=$_SESSION['email'];
	$current_user = $_SESSION['id'];
if(isset($_POST['sclupdate'])){
	$schoolname=$_POST['schoolname'];
	$reg=$_POST['reg'];
	$Dise=$_POST['Dise'];
	$scode=$_POST['scode'];
	$schooladdress=$_POST['schooladdress'];
	$year=$_POST['year'];


	$sql="UPDATE scl_update SET sclname='$schoolname',register='$reg',dise='$Dise',scode='$scode',scladdress='$schooladdress',year='$year'WHERE email='$email' ";
	
	if(mysqli_query($conn,$sql)){
		$msg='Data updated';
	}else{
		$msg='Data not updated'.mysqli_error($conn);
	}
}
    $sql="SELECT * FROM scl_update WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result)
?>

	<form action="#" method="post">
		<input type="text" name="schoolname" value="<?php echo $row['sclname'];?>" placeholder="School name" />
		<input type="text" name="reg" value="<?php echo $row['register'];?>" placeholder="Reg." />
		<input type="text" name="Dise" value="<?php echo $row['dise'];?>" placeholder="School Dise" />
 		<input type="text" name="schooladdress" value="<?php echo $row['scladdress'];?>" placeholder="Address" />
		<input type="text" name="year" value="<?php echo $row['year'];?>" placeholder="year" />
		<input type="submit" name="sclupdate"/>
		<h3><?php echo $msg;?></h3>
	</form>
	<h3>Update Password</h3>
	<?php
		$msg2='';

if(isset($_POST['Updatepass'])){
	$password=$_POST['password'];
	$sql="UPDATE scl_update SET password='$password' WHERE id=1 ";
	
	if(mysqli_query($conn,$sql)){
		$msg2=='Password updated';
	}else{
		$msg2=='Password not updated'.mysqli_error($conn);
	}
}
	?>
	<h3><?php echo $msg2;?></h3>
		<form action="#" method="post">
		<input type="password" name="password"  placeholder="Password" />
		
		<input type="submit" name="Updatepass" value="Update" />
	</form>