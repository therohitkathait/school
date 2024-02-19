<?php
 $current_user = $_SESSION['id'];
	function subject(){
		global $conn;
	$sql="SELECT * FROM subject WHERE parent=$current_user";
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
			echo '<table>';
			}
			else{
				echo 'Table is empty no record found.';
			}
	}

?>