<?php
	include "header.php";
	$msg='';
	$sid=$_GET['sid'];
	
	    $sql1="SELECT * FROM scl_staff  WHERE id='$sid' ";
            $result1=mysqli_query($conn,$sql1);
            $row=mysqli_fetch_assoc($result1);
            $dsgvalue=$row['designation'];
            $gndrvalue=$row['gender'];
			$imagePath =$row['staffimg'];
			
 if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$dob=$_POST['dob'];
	$Number=$_POST['Number'];
	$rollnumber=$_POST['address'];
	$ssmid=$_POST['Designation'];
	$ddl=$_POST['Sallery'];
	$gender=$_POST['gender'];
	
		if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
  // New image is uploaded
  $img_name = $_FILES['image']['name'];
  $tmp_img_name = $_FILES['image']['tmp_name'];
  $folder = 'upload_img/';
  move_uploaded_file($tmp_img_name, $folder.$img_name);

  // Update the image path with the newly uploaded image
  $imagePath = $img_name;
}

$sql="UPDATE scl_staff SET fullname='$name',fathername='$fname',dobirth='$dob',mobileno='$Number',
address='$rollnumber',designation='$ssmid',sallery='$ddl',gender='$gender' ,staffimg='$imagePath' WHERE id='$sid' ";
		
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
	   <script>

  var loadFile = function(event) {

    var output = document.getElementById('output');

    output.src = URL.createObjectURL(event.target.files[0]);

    output.onload = function() {

    URL.revokeObjectURL(output.src) // free memory

    }

  };
  
 


</script>
<?php
	if(empty($_FILES['image']['name'])){
		$img_name= $imagePath;
	}
?>

                 <form action="" method="post" enctype="multipart/form-data">

        <div class="title">

          <i class="fas fa-pencil-alt"></i> 

          <h2>Staff Registration</h2>
			<h3><?php echo $msg;?><h3>
        </div>

        <div class="info">

            <div class="imgupload">
              <img src="upload_img/<?php echo $imagePath;?>"id="output" />
              <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
              <p style="color:red;"></p>
            </div>


       
          <input class="fname ff50" type="text" name="name" placeholder="Full name" value="<?php echo $row['fullname'];?>">

          <input class="ff50" type="text" name="fname" placeholder="Father Name" value="<?php echo $row['fathername'];?>">


        <input class="ff50" type="date" name="dob" placeholder="Date of birth" value="<?php echo $row['dobirth'];?>">

        <input class="ff50" type="Number" name="Number" placeholder="Mobile Number" value="<?php echo $row['mobileno'];?>">

        <input class="ff50" type="text" name="address" placeholder="Adress" value="<?php echo $row['address'];?>">
             
        <select class="ff50" type="text" name="Designation" placeholder="Designation" >
            <option>Designation</option>
            <option value="teacher"<?php if($dsgvalue=='teacher') echo 'selected';?>>Teacher</option>
            <option value="Driver"<?php if($dsgvalue=='Driver') echo 'selected';?>>Driver</option>
            <option value="Office Employee"<?php if($dsgvalue=='Office Employee') echo 'selected';?>>Office Employe</option>
            <option value="principal"<?php if($dsgvalue=='principal') echo 'selected';?>>Principal</option>
            <option value="Peone"<?php if($dsgvalue=='Peone') echo 'selected';?>>Peone</option>
        </select>

             <!--<input class="ff50" type="text" name="subject" placeholder="Subject">--->

             <input class="ff50" type="Number" name="Sallery" placeholder="Sallery" value="<?php echo $row['sallery'];?>">
             

             <div class="ff50">

				<label>Gender</label>

             <input type="radio" value="Male" name="gender"<?php if($gndrvalue=='Male') echo 'checked';?>><span>Male</span>

             <input type="radio" value="Female" name="gender"<?php if($gndrvalue=='Female') echo 'checked';?>><span>Female</span></div>

             <button class="ff50" type="submit" name="submit" href="/">Submit</button>

          </div>
      </form>

      </div>  

       

</div>
   
    </div>
   </body>