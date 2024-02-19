<?php
include "connect.php";
$current_user = $_SESSION['id'];
$msg='';
if(isset($_POST['subjects'])){
	$subject=$_POST['subject'];


	$sql="INSERT INTO subject (name,parent) VALUES('$subject','$current_user')";
	
	if(mysqli_query($conn,$sql)){
		$msg='Subject inserted';
	}else{
		$msg='Subject not inserted';
	}
}
?>
<h3>Add Subject</h3>
<h3><?php echo $msg;?></h3>

  <table>

      <tr>
	  <td>
	  <form action="" method="post">
	  <input type="text" name="subject" placeholder="Subject" required/>
	  </td>
	  <td>
	  <input type="hidden" name="userid" value="3" Placeholder="Fees"/>
	  </td>
	  <td>
	  <input type="submit" name="subjects" value="add"/>
	  </form>
	  </td>
	  </tr>
</table>
<?php
	  $sql="SELECT * FROM subject WHERE parent=$current_user ";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0){
			echo '
			<table border="1" cellpadding="5" cellspacing="5">
				<tr>
					<th>S.no</th>
					<th>subject</th>
				</tr>
				';
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$row['name'].'</td>
						<td><a href="delete-sub.php?sid='.$row['id'].'"><i class="fa-solid fa-trash"></i></a></td>
						</tr>';
					$i++;
			}
			echo '</table>';
			}
			else{
				echo 'Table is empty no record found.';
			}

	  ?>