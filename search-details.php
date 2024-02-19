<?php
	include "header.php";
	$sid=$_GET['sid'];
	
	$sql="SELECT * FROM addstudent WHERE id='$sid' ";
	
	$result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0){
			echo '
			<table border="1" cellpadding="5" cellspacing="5" class="table" id="filterTable" style="display: inline-table; width:100%"><br><br><br>
				<thead>
				<tr>
					<th scope="col">No.</th>  
					<th scope="col">Student Name</th>
					<th scope="col">Father Name</th>
					<th scope="col">mother Name</th>
					<th scope="col">date of birth</th>
					<th scope="col">Phone</th>
					<th scope="col">Class</th>
					<th scope="col">roll number</th>
					<th scope="col">adhaar number</th>
					<th scope="col">ssmid number</th>
				</tr>
				</thead>
				';
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
				echo '<tr>
						<td scope="col">'.$i.'</td>
						<td scope="col">'.$row['fullname'].'</td>
						<td scope="col">'.$row['fathername'].'</td>
						<td scope="col">'.$row['mothername'].'</td>
						<td scope="col">'.$row['dateofbirth'].'</td>
						<td scope="col">'.$row['mobileno'].'</td>
						<td scope="col">'.$row['class'].'</td>
						<td scope="col">'.$row['rollnumber'].'</td>
						<td scope="col">'.$row['adharno'].'</td>
						<td scope="col">'.$row['samgrano'].'</td>
						
						</tr>';
					$i++;
			}
			echo '</table>';
			}
?>