<?php include "header.php";?>

<form style="text-align: center; margin-top: 4%;" method="post" action="cvs_demo.php" enctype="multipart/form-data">
	<p style="background-color:#5cb5b5; color:white; padding: 12px; margin: 2px 25%; border-radius: 10px;">uplode file <input type="file" name="filename" /></p>
	<button style="background-color: #5cb5b5; padding:12px 30px; position: relative;
    z-index: 9999;" type="submit" name="submit" value="Save" >Submit</button>
</form>

<?php
$current_user = $_SESSION['id'];
if (isset($_POST['submit'])) 
	{
		
		 $handle = fopen($_FILES['filename']['tmp_name'], "r");
		$headers = fgetcsv($handle, 1000, ",");
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
		{
			$id = $data[0];
			
			if($id && $id != 'SN.'){
				//print_r($data);
				//die();
				
				$dob = $data[1];
				$name = $data[2];
				$mothername = $data[3];
				$fathername = $data[4];
				$SCHOLERS = $data[5];
				$rollnumber = $data[6];
				$samgrano = $data[7];
				$adharno = $data[8];
				$address = $data[9];
				$attendence= $data[10];
				$hindi= $data[11];
				$maths= $data[12];
				$english= $data[13];
				$science= $data[14];
				$sst= $data[15];
				$class= $data[24];
				
				$query = "SELECT COUNT(*) as count, GROUP_CONCAT(id) as id FROM addstudent WHERE fullname = '$name'";
				$result = $conn->query($query);
				$msg='';
				// Check if any rows are returned
				if ($result->num_rows > 0) {
					$row = $result->fetch_assoc();
					$count = $row['count'];
					
    // Check the count value to determine if the value is a duplicate
				if ($count > 0) {
					$user_id =  $row['id'];
					
					
						$query = "SELECT COUNT(*) as count FROM marksheet WHERE student = $user_id";
						$result = $conn->query($query);
						if ($result->num_rows > 0) {
							$row = $result->fetch_assoc();
							$count = $row['count'];

							if ($count > 0) {
								$msg= 'student data exists.';
							} else {							

				// Insert data into Table2
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','hindi','$class',$hindi,100,'$current_user','$year')" ;
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','maths','$class',$maths,100,'$current_user','$year')" ;
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','english','$class',$english,100,'$current_user','$year')";
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','science','$class',$science,100,'$current_user','$year')";
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','sst','$class',$sst,100,'$current_user','$year')";
				$result=mysqli_query($conn,$sql2);
					
							}}} else {
					// Value is unique, add condition
					
					//Insert data into Table1
			   $sql1 ="INSERT INTO addstudent (dateofbirth, fullname,mothername,fathername,SCHOLERS,rollnumber,samgrano,adharno,address,attendence,class,parent,year)
			    VALUES ('$dob', '$name','$mothername','$fathername','$SCHOLERS','$rollnumber','$samgrano','$adharno','$address','$attendence','$class','$current_user','$year')" ;
			   $result=mysqli_query($conn,$sql1);
			   
			   $user_id = mysqli_insert_id($conn);
				// Insert data into Table2
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','hindi','$class',$hindi,100,'$current_user','$year')" ;
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','maths','$class',$maths,100,'$current_user','$year')" ;
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','english','$class',$english,100,'$current_user','$year')";
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','science','$class',$science,100,'$current_user','$year')";
				$result=mysqli_query($conn,$sql2);
				$sql2 =  "INSERT INTO marksheet (student,subject,class, obtmarks,totalmarks,parent,year) VALUES ('$user_id','sst','$class',$sst,100,'$current_user','$year')";
				$result=mysqli_query($conn,$sql2);
				
				$msg='student detials inserted';
					$delay =2;
		sleep($delay);
        header("Location: home.php");
			  }
			} 
			
		}
	}
	echo $msg;
fclose($handle);
$conn->close();
	}
  
// Close the database connection

?>
