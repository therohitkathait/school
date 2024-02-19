<?php include "header.php"; ?>
<?php
   $current_user = $_SESSION['id'];
$msg="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$dob=$_POST['dob'];
	$Number=$_POST['Number'];
	$rollnumber=$_POST['address'];
	$ssmid=$_POST['Designation'];
	$ddl=$_POST['Sallery'];
	$gender=$_POST['gender'];
					$img_name=$_FILES['image']['name'];
					$tmp_img_name=$_FILES['image']['tmp_name'];
					$folder='upload_img/';
					move_uploaded_file($tmp_img_name,$folder.$img_name);

	$sql="INSERT INTO scl_staff (fullname,fathername,dobirth,mobileno,address,designation,sallery,gender,staffimg,parent)
	VALUES('$name','$fname','$dob','$Number','$rollnumber','$ssmid','$ddl','$gender','$img_name','$current_user')";
	
	if(mysqli_query($conn,$sql)){
		$msg='staff registered succecfully';
    $delay =2;
    sleep($delay);
      header("location:staff_data.php");
	}else{
		$msg='staff not registered succecfully';
	}
}
?>
    <div class="contenier">
  <script>

  var loadFile = function(event) {

    var output = document.getElementById('output');

    output.src = URL.createObjectURL(event.target.files[0]);

    output.onload = function() {

      URL.revokeObjectURL(output.src) // free memory

    }

  };

</script>

                <div class="studentform">

                 <form action="" method="post" enctype="multipart/form-data">

        <div class="title">

          <i class="fas fa-pencil-alt"></i> 

          <h2>Staff Registration</h2>

        </div>

        <div class="info">

            <div class="imgupload">

            <img id="output" value="upload image"/>

            <input type="file" name="image" accept="image/*" onchange="loadFile(event)">

                   <p style="color:red;"></p>

</div>

          <input class="fname ff50" type="text" name="name" placeholder="Full name">

          <input class="ff50" type="text" name="fname" placeholder="Father Name">

    

           <input class="ff50" type="date" name="dob" placeholder="Date of birth">

          <input class="ff50" type="Number" name="Number" placeholder="Mobile Number">

             <input class="ff50" type="text" name="address" placeholder="Adress">
             
             <select class="ff50" type="text" name="Designation" placeholder="Designation">
                 <option>Designation</option>
                 <option value="teacher">Teacher</option>
                 <option value="Driver">Driver</option>
                 <option value="Office Employee">Office Employe</option>
                 <option value="Principal">Principal</option>
                 <option value="Peone">Peone</option>
             </select>

             <!--<input class="ff50" type="text" name="subject" placeholder="Subject">--->

             <input class="ff50" type="Number" name="Sallery" placeholder="Sallery">
             

             <div class="ff50">

         <lable>Gender</lable>

             <input type="radio" value="Male" name="gender"><span>Male</span>

             <input type="radio" value="Female" name="gender"><span>Female</span></div>

             <button class="ff50" type="submit" name="submit" href="/">Submit</button>

          </div>
      </form>

      </div>  

       

</div>
   
    </div>
   </body>
</html>