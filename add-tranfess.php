<h3>Add Transport Fees</h3>

	<?php
	$msg='';
	$current_user = $_SESSION['id'];
if(isset($_POST['submit'])){
	$location=$_POST['place'];
	$fees=$_POST['tranfees'];


	$sql="INSERT INTO scl_tranfees (location,fees,parent) VALUES('$location','$fees','$current_user')";
	
	if(mysqli_query($conn,$sql)){
		$msg='Data inserted';
	}else{
		$msg='Data not inserted';
	}
}
?>
<h3><?php echo $msg;?></h3>

  <table>

      <tr>
	  <td>
	  <form action="" method="post">
	  <input type="text" name="place" placeholder="place" required/>
	  </td>
	  <td>
	  <input type="text" name="tranfees" value="" Placeholder="Fees"/>
	  </td>
	  <td>
	  <input type="submit" name="submit" value="add"/>
	  </form>
	  </td>
	  </tr>
</table>
<?php
	  $sql="SELECT * FROM scl_tranfees WHERE parent=$current_user ";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0){
			echo '
			<table border="1" cellpadding="5" cellspacing="5">
				<tr>
					<th>S.no</th>
					<th>place</th>
					<th>fees</th>
					<th>action</th>
				</tr>
				';
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$row['location'].'</td>
						<td>'.$row['fees'].'</td>
						<td><a href="delete-tranfees.php?sid='.$row['id'].'"><i class="fa-solid fa-trash"></i></a></td>
						</tr>';
					$i++;
			}
			echo '</table>';
			}
			else{
				echo 'Table is empty no record found.';
			}

	  ?>
 
  