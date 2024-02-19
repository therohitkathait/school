
   
  <!DOCTYPE html>

<html>

<head>   

<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>
<script>

function openNav() {

    var WindowWidth = $(window).width();
   if (WindowWidth < 415){

       document.getElementById("mySidenav").style.width = "250px";

  document.getElementById("main").style.marginLeft = "250px";

   }
   else {
       document.getElementById("mySidenav").style.width = "16%";

  document.getElementById("main").style.marginLeft = "16%";
 
   }


 
}



function closeNav() {

  document.getElementById("mySidenav").style.width = "0";

  document.getElementById("main").style.marginLeft= "0";

}

$( document ).ready(function() {
   document.getElementById("mySidenav").style.width = "0";

  document.getElementById("main").style.marginLeft= "0";
});

</script>

<body>

      <div id="mySidenav" class="sidenav">

         

  <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()">&times;</a>

  <a class="username" href="#"><h6>2323508097</h6></a>

   <a href="home.php">Dashbord</a>

  <a href="student_list.php">Student</a>

  <a href="staff_data.php">Staff</a>

  <a href="fess_list.php">Student Fess</a>

  <a href="attendance.php">Attendance</a>

   <a href="dailyspend.php">Daily spend</a>

   <a href="student_marksheet.php">Markseet</a>

  <a href="setting.php">Setting</a>

  <a href="data.php">Data Download</a>

</div>
 


<div id="main">

    

    <header>

        <h1><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></h1>

    </header>

  

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

            <form action="#" id="example_form1" method="post" enctype="multipart/form-data">

      <div class="title">

          <i class="fas fa-pencil-alt"></i> 

          <h2>
                  </div>

        <div class="info">

            <div class="imgupload">

            <img id="output" value="upload image" src="student_img/1682409472.jpg"/>

            <input type="file" name="image" accept="image/*" onchange="loadFile(event)">

           <p style="color:red;"></p>

</div>
<div style="width:100%; text-align:center;">
<button class="fhf50" type="submit" name="Update" href="/">Update</button>
</div>

</from>



                <div class="studentform">

                 <form action="#" id="example_form1" method="post" enctype="multipart/form-data">

        

        <div class="info">

       <!---     <div class="imgupload">

            <img id="output" value="upload image"/>

            <input type="file" name="image" accept="image/*" onchange="loadFile(event)">

</div>-->
<input type="hidden" name="stafusername" value="85"/>

          <input class="fname ff50" type="text" name="name" value="Amit Malviya" placeholder="Full name">

          <input class="ff50" type="text" name="fname" value="Chandrapal Malviya" placeholder="Father Name">

          <input class="ff50" type="text" name="mname" value="Anita bai" placeholder="Mother Name">

           <input class="ff50" type="Number" name="Numbers" value="6260921299" placeholder="Mobile Number">

          <input class="ff50" type="date" name="dob" value="12/12/2014" placeholder="Date Of birth">

          
      <select class="ff50" name="class">

           <option value="course-type" selected="">Class*</option>

             Array
(
    [id] => 46
    [class] => 1st
    [Fess] => 5000
    [userid] => 3
    [roll] => cl
)

            <option value="1st" >1st</option>

           Array
(
    [id] => 47
    [class] => 2nd
    [Fess] => 6000
    [userid] => 3
    [roll] => cl
)

            <option value="2nd" >2nd</option>

           Array
(
    [id] => 49
    [class] => 3rd
    [Fess] => 7000
    [userid] => 3
    [roll] => cl
)

            <option value="3rd" selected>3rd</option>

           Array
(
    [id] => 55
    [class] => 5th
    [Fess] => 8000
    [userid] => 3
    [roll] => cl
)

            <option value="5th" >5th</option>

           Array
(
    [id] => 56
    [class] => 6th
    [Fess] => 9000
    [userid] => 3
    [roll] => cl
)

            <option value="6th" >6th</option>

           Array
(
    [id] => 57
    [class] => 7th
    [Fess] => 10000
    [userid] => 3
    [roll] => cl
)

            <option value="7th" >7th</option>

           Array
(
    [id] => 58
    [class] => 8th
    [Fess] => 11000
    [userid] => 3
    [roll] => cl
)

            <option value="8th" >8th</option>

           Array
(
    [id] => 60
    [class] => 4th
    [Fess] => 7500
    [userid] => 3
    [roll] => cl
)

            <option value="4th" >4th</option>

           
          </select>

          
          
           <input class="ff50" type="Number" name="rollnumber" value="301" placeholder="Roll Number">

            

            <input class="ff50"  type="Number" name="adhar" value="754675753882" placeholder="Adhar Number">

            

             
            <input class="ff50" type="text" name="ssmid" value="100032343" placeholder="Samagra Number"/>
            <input class="ff50" type="text" name="ddl_Village" value="Tonk Khurd" placeholder="Adress">

             <div class="ff50">

         <lable>Gender</lable>

             <input type="radio" value="Male" name="gender" checked ><span>Male</span>

             <input type="radio" value="Female" name="gender" ><span>Female</span></div>

                  <div class="ff50" style="display: inline-grid;">

             
              <div class="form-group" style="width: 80%;">

        <input type="checkbox" name="parent_field" id="field1" value="yes" checked > <label for="field1">Add Transport Service</label>

        </div>

 


          <div class="form-group" style="width: 80%;">

            <select name="dependant_field" id="field2">

                <option value="">Select Pickup and Drop Point</option>

                 

                <option value="kanheriya" >kanheriya(Rs6000)</option>

                                

                <option value="Devli" >Devli(Rs8000)</option>

                                

                <option value="Tonkkhurd" >Tonkkhurd(Rs5000)</option>

                                

                <option value="Fatanpur" >Fatanpur(Rs6000)</option>

                
            </select>

          </div></div>
<label class="ff50" style="float: left;"><input type="checkbox" value="yes" name="rte" > RTE Addmition </label>
             <button class="ff50" type="submit" name="submit" href="/">Submit</button>

          </div>

      </form>

      </div>

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