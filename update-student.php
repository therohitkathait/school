<?php
	include "header.php";
	$msg='';
	$sid=$_GET['sid'];
	
            	$sql1="SELECT * FROM addstudent  WHERE id='$sid' ";
            	$result1=mysqli_query($conn,$sql1);
            	$row=mysqli_fetch_assoc($result1);
            	$radioValue = $row['gender'];
            	$rteValue = $row['rte'];
            	$trnValue = $row['trans'];
            	$ctgValue = $row['category'];
            	$drpValue = $row['droppoint'];
            	$imagePath =$row['studentimg'];
            	$current_user = $_SESSION['id'];
            	
	if(isset($_POST['submit'])){
		
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$dob=$_POST['dob'];
	$Number=$_POST['Number'];
	$class=$_POST['class'];
	$rollnumber=$_POST['rollnumber'];
	$adhar=$_POST['adhar'];
	$ssmid=$_POST['ssmid'];
	$ddl=$_POST['ddl'];
	$gender=$_POST['gender'];
	$category=$_POST['category'];
	$dependant_field=$_POST['dependant_field'];
	$trans=$_POST['parent_field'];
	$rteadm=$_POST['rteadm'];
	//$stmt->execute([$fileName]);

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
          // New image is uploaded
          $img_name = $_FILES['image']['name'];
          $tmp_img_name = $_FILES['image']['tmp_name'];
          $folder = 'upload_img/';
          move_uploaded_file($tmp_img_name, $folder.$img_name);
        
          // Update the image path with the newly uploaded image
          $imagePath = $img_name;
        }
	
	$sql="UPDATE addstudent SET fullname='$name',fathername='$fname',mothername='$mname',dateofbirth='$dob'
	,mobileno='$Number',class='$class',rollnumber='$rollnumber',adharno='$adhar',samgrano='$ssmid',address='$ddl',gender='$gender',category='$category'
	,droppoint='$dependant_field',trans='$trans',rte='$rteadm',studentimg='$imagePath' WHERE id='$sid' ";
		
	if(mysqli_query($conn,$sql)){
		$msg='student details updated';
		$delay =1;
		sleep($delay);
		  header("location:student_list.php");
	}else{
		$msg='student details not updated'.mysqli_error($conn);
	}
	}

?>
<html>
	<head>
		<style>
			.submit-btn{
			background-color:#5cb5b5;
			padding:17px 40px;
			border-radius:12px;
			margin-left:20%;
		}
		</style>
	</head>
	<body>
		
	<script>

var loadFile = function(event) {

  var output = document.getElementById('output');

  output.src = URL.createObjectURL(event.target.files[0]);

  output.onload = function() {

	URL.revokeObjectURL(output.src) // free memory

  }

};

</script> 
<form action="#" id="example_form1" method="post" enctype="multipart/form-data">
	<h3><?php echo $msg; ?></h3>

	<div class="info">
			<h3><?php echo $msg;?></h3>
            <div class="imgupload">
            <img src="upload_img/<?php echo $imagePath;?>" id="output" />
            <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
           <p style="color:red;"></p>
</div>
	<input class="fname ff50" type="text" name="name" placeholder="Full name" value="<?php echo $row['fullname'];?>" required >

          <input class="ff50" type="text" name="fname" placeholder="Father Name" value="<?php echo $row['fathername'];?>" required >

          <input class="ff50" type="text" name="mname" placeholder="Mother Name"  value="<?php echo $row['mothername'];?>" required >

           <input class="ff50" type="date" name="dob" placeholder="(dd/mm/yyyy)Date of birth" value="<?php echo $row['dateofbirth']; ?>"  required >

          <input class="ff50" type="Number" name="Number" placeholder="Mobile Number" value="<?php echo $row['mobileno'];?>"  required >

          

      <select class="ff50" name="class" value="" required >
	  
			<?php
		  $sql1="SELECT * FROM scl_addfees WHERE parent= '$current_user' ";
		  $result1=mysqli_query($conn,$sql1);
		  if(mysqli_num_rows($result1)>0){
					
				while($row1=mysqli_fetch_assoc($result1))
				{ ?>
					
					<option value="<?php echo $row1['class'];?>"
				<?php if($row['class'] == $row1['class'])echo 'selected';?>>
					<?php echo $row1['class'];?>
						</option>
				<?php }
				
				}
				
				?>
          </select>

          

           <input class="ff50" type="Number" name="rollnumber" placeholder="Roll Number" value="<?php echo $row['rollnumber'];?>"  >

            <input class="ff50"  type="Number" name="adhar" placeholder="Aadhar Number" value="<?php echo $row['adharno'];?>"  required >

            <input class="ff50" type="Number" name="ssmid" placeholder="Samagra Number" value="<?php echo $row['samgrano'];?>"  required >

         

             <input class="ff50" type="text" name="ddl" placeholder="Adress" value="<?php echo $row['address'];?>"  required >

       

             <div class="ff50 gender">

         <lable>Gender</lable>

             <input type="radio" value="Male" name="gender"  <?php if ($radioValue === "Male") echo "checked"; ?> required><span>Male</span>

             <input type="radio" value="Female" name="gender" <?php if ($radioValue === "Female") echo "checked"; ?>><span>Female</span></div>


        <div class="ff50 Categury" style="display: inline-block;">
         <select name="category" style="width: 100%;     font-size: 20px;" required >

            <option value="category">category</option>
            <option value="General"<?php if ($ctgValue === "General") echo "selected"; ?>>General</option>
            <option value="obc"<?php if ($ctgValue === "obc") echo "selected"; ?>>OBC</option>
            <option value="sc"<?php if ($ctgValue === "sc") echo "selected"; ?>>SC</option>
            <option value="st"<?php if ($ctgValue === "st") echo "selected"; ?>>ST</option>
            </select>

         </div>
        
             <div class="" style="float: left;width: 92%;">

              <div class="form-group">    

        <input type="checkbox" name="parent_field" id="field1" value="yes" <?php if ($trnValue === "yes") echo "checked"; ?> > <label for="field1">Add Transport Service</label>

        </div>

          <div class="form-group">

            <select class="" name="dependant_field" id="field2">
				 
			<?php
			
		  $sql2="SELECT * FROM scl_tranfees WHERE parent= '$current_user'";
		  $result2=mysqli_query($conn,$sql2);
		  if(mysqli_num_rows($result2)>0){
			
				while($row2=mysqli_fetch_assoc($result2))
				{ $drpp=$row2['location'];
					$drppp=$row2['fees'];
					$drpt=$drpp . $drppp;
					
					?>
					 
					<option value="<?php echo $drpt;?>"
				<?php if($row['droppoint'] == $drpt)echo 'selected';?>>
					<?php echo $drpt;?>
						</option>
				<?php }
				}
				
				?>
                
            </select>
          </div></div>
             <label class="ff50" style="float: left;">
			 <input type="checkbox" value="yes" name="rteadm" <?php if ($rteValue === "yes") echo "checked"; ?> > RTE Addmition </label>
             <button class="ff50" type="submit" name="submit" href="/">update</button>

          </div>
 </body>
 </html>