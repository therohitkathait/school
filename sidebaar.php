
<?php 
	session_start();
	include "connect.php";
$current_user = $_SESSION['id'];
$sql="SELECT * FROM scl_update WHERE id=$current_user";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
		$dise=$row['dise'];
		}
		}
?>
     <div id="mySidenav" class="sidenav">     

  <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()">&times;</a>

  <a class="username" href="#"><h6><?php echo $dise; ?></h6></a>

   <a href="home.php">Dashbord</a>

  <a href="student_list.php">Student</a>

  <a href="staff_data.php">Staff</a>

   <a href="dailyspend.php">Daily spend</a>

   <a href="student_marksheet.php">Markseet</a>

  <a href="setting.php">Setting</a>

  <a href="data.php">fiter Data</a>
  
  <a href="cvs_demo.php">CVSfile uplode</a>
    
  <a href="move-year.php">move student to next year</a>

</div>
 
