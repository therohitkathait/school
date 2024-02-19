<?php include "header.php";?>
<?php
$current_user = $_SESSION['id'];
 
$msg="";
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
	
					$img_name=$_FILES['image']['name'];
					$tmp_img_name=$_FILES['image']['tmp_name'];
					$folder='upload_img/';
					move_uploaded_file($tmp_img_name,$folder.$img_name);
          $current_user = $_SESSION['id'];			

	$sql="INSERT INTO addstudent (fullname,fathername,mothername,dateofbirth,mobileno,class,rollnumber,adharno,samgrano,address,gender,category,droppoint,parent,trans,rte,year,studentimg)
	VALUES('$name','$fname','$mname','$dob','$Number','$class','$rollnumber','$adhar','$ssmid','$ddl','$gender','$category','$dependant_field','$current_user','$trans','$rteadm','$year','$img_name')";
	
	if(mysqli_query($conn,$sql)){
		$msg='student registered succecfully';
    $delay =2;
  sleep($delay);
    header("location:student_list.php");
	}else{
		$msg='student not registered succecfully';
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
<style type="text/css">
  button.ff50 {
    position: fixed;
    bottom: -68px;
    right: 0px;
    width: 200px;
}
</style>

                <div class="studentform">

          <form action="" id="example_form1" method="post" enctype="multipart/form-data">

        <div class="title">

          <i class="fas fa-pencil-alt"></i> 

          <h2>Student Registration</h2>
		
        </div>

        <div class="info">
			<h3><?php echo $msg;?></h3>
            <div class="imgupload">
            <img id="output" value="upload image"/>
            <input type="file" name="image" accept="image/*" onchange="loadFile(event)">

           <p style="color:red;"></p>
</div>

          <input class="fname ff50" type="text" name="name" placeholder="Full name" required >

          <input class="ff50" type="text" name="fname" placeholder="Father Name" required >

          <input class="ff50" type="text" name="mname" placeholder="Mother Name" required >

           <input class="ff50" type="date" name="dob" placeholder="(dd/mm/yyyy)Date of birth" required >

          <input class="ff50" type="Number" name="Number" placeholder="Mobile Number" required >


          

      <select class="ff50" name="class" required >
			<option value='class'>class</option>
			<?php
			  $sql="SELECT * FROM scl_addfees WHERE parent=$current_user";
			  $result=mysqli_query($conn,$sql);
			  if(mysqli_num_rows($result)>0){
						$i=1;
					while($row=mysqli_fetch_assoc($result))
					{
						echo
								'<option value='.$row['class'].'>'.$row['class'].'</option>';
							$i++;
              
					}
					}
			?>
          </select>


           <input class="ff50" type="Number" name="rollnumber" placeholder="Roll Number">

            <input class="ff50"  type="Number" name="adhar" placeholder="Aadhar Number" required >

            <input class="ff50" type="Number" name="ssmid" placeholder="Samagra Number" required >
         

             <input class="ff50" type="text" name="ddl" placeholder="Adress" required >

       

             <div class="ff50 gender">

         <lable>Gender</lable>

             <input type="radio" value="Male" name="gender" required><span>Male</span>

             <input type="radio" value="Female" name="gender"><span>Female</span></div>


        <div class="ff50 Categury" style="display: inline-block;">
         <select name="category" style="width: 100%;     font-size: 20px;" required >

            <option value="">category*</option>
            <option value="General">General</option>
            <option value="obc">OBC</option>
            <option value="sc">SC</option>
            <option value="st">ST</option>
            </select>

         </div>
        
             <div class="" style="float: left;width: 92%;">

              <div class="form-group">    

          <input type="checkbox" name="parent_field" id="checkbox" value="yes"> <label for="checkbox">Add Transport Service</label>

        </div>

          <div class="form-group">

            <select class="" name="dependant_field" id="field2" disabled>
				 <option value="Select Pickup and Drop Point" selected>Select Pickup and Drop Point</option>
			<?php
		  $sql="SELECT * FROM scl_tranfees WHERE parent=$current_user";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0){
					
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<option value='.$row['location'].''.$row['fees'].'> '.$row['location'].''.$row['fees'].' </option>';
						
				}
				
				}
				
				?>
                
            </select>

          </div></div>
             <label class="ff50" style="float: left;"><input type="checkbox" value="yes" name="rteadm"> RTE Addmition </label>
             <button class="ff50" type="submit" name="submit" href="/">Submit</button>

          </div>

      

    

      </form>

      </div>  

      <script>
  const checkbox = document.getElementById('checkbox');
    const select = document.getElementById('field2');

    checkbox.addEventListener('change', function() {
      select.disabled = !checkbox.checked;
      select.value = ''; // Deselect the option when checkbox is unchecked
    });

  </script>
       <script src="js/mf-conditional-fields.min.js"></script>

        <script type="text/x-rules" id="rules-mf-conditional-fields">

    [

    {

       "field":"dependant_field",

       "container":".form-group",

       "action":"show",

       "logic":"or",

       "rules":{

          "name":"parent_field",

          "operator":"is",

          "value":"yes"

       }

    },

    {

       "field":"dependant_container",

       "container":".alert-primary",

       "action":"hide",

       "logic":"or",

       "rules":{

          "name":"parent_field",

          "operator":"is",

          "value":"yes"

       }

    }

    

    

 ]

  </script>

  <script>

    // Example 1

    mfConditionalFields('#example_form1', { rules: 'block' });

   

   

  </script>

 

</div>

    </div>
	
   </body>
</html>