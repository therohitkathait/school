<?php
	include "header.php";
	$msg='';
	$sid=$_GET['sid'];
 if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$dob=$_POST['dob'];
	$Number=$_POST['Number'];
	$rollnumber=$_POST['address'];
	$ssmid=$_POST['Designation'];
	$ddl=$_POST['Sallery'];
	$gender=$_POST['gender'];
	
	$sql="UPDATE scl_staff SET fullname='$name',fathername='$fname',dobirth='$dob',mobileno='$Number',address='$rollnumber',designation='$ssmid',sallery='$ddl',gender='$gender' WHERE id='$sid' ";
		
	if(mysqli_query($conn,$sql)){
		$msg='staff details updated';
        $delay =1;
		sleep($delay);
		  header("location:staff_data.php");
	}else{
		$msg='staff details not updated'.mysqli_error($conn);
	}
	}
?>
<html>
	<head>
	
	</head>
	<body>
	 <div class="studentform">

                 <form action="#" method="post" enctype="multipart/form-data">

        <div class="title">

          <i class="fas fa-pencil-alt"></i> 

          <h2>Staff Registration</h2>
			<h3><?php echo $msg;?><h3>
        </div>

        <div class="info">

            <div class="imgupload">

                <img id="output" value="upload image"/>

                <input type="file" name="image" accept="image/*" onchange="loadFile(event)">

                   <p style="color:red;"></p>

            </div>

        <?php
            $sql1="SELECT * FROM socialqualitie  WHERE id='$sid' ";
            $result1=mysqli_query($conn,$sql1);
            $row=mysqli_fetch_assoc($result1);
            $dsgvalue=$row['designation'];
            $gndrvalue=$row['gender'];
        ?>
        
          <input class="fname ff50" type="text" name="name" placeholder="Full name" value="<?php echo $row['fullname'];?>">


      </form>

      </div>  

       

</div>
   
    </div>
   </body>