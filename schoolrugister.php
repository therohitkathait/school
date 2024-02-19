<?php
session_start();
include "connect.php";
$msg='';
if(isset($_POST['submit'])){
	$schoolname=$_POST['schoolname'];
    $uname=$_POST['uname'];
    $psw=$_POST['psw'];
	$reg=$_POST['reg'];
	$Dise=$_POST['Dise'];
	$scode=$_POST['scode'];
	$schooladdress=$_POST['schooladdress'];
	$year=$_POST['year'];

$sql= "INSERT INTO scl_update (sclname, email, password, register, dise, scode, scladdress, year) VALUES
    ('$schoolname', '$uname', '$psw', '$reg', '$Dise', '$scode', '$schooladdress', '$year')";
    if(mysqli_query($conn,$sql)){
        $msg='register successfully';
        header("location:index.php");
    }else{
        $msg='not register successfully';
    }
}
?>
<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {font-family: Arial, Helvetica, sans-serif;

     background-color: #5cb5b5;

}

form.modal-content.animate {width: 351px;}



.imgcontainer h1 {

    font-size: 19px;

}



/* Full-width input fields */

input[type=text], input[type=password] {

  width: 100%;

  padding: 12px 20px;

  margin: 8px 0;

  display: inline-block;

  border: 1px solid #ccc;

  box-sizing: border-box;

}



/* Set a style for all buttons */

button {

  background-color: #5cb5b5;

  color: white;

  padding: 14px 20px;

  margin: 8px 0;

  border: none;

  cursor: pointer;

  width: 100%;

}



button:hover {

  opacity: 0.8;

}







/* Center the image and position the close button */

.imgcontainer {

  text-align: center;

  margin: 24px 0 12px 0;

  position: relative;

}



img.avatar {

  width: 40%;

  border-radius: 50%;

}



.container {

  padding: 16px;

}



span.psw {

  float: right;

  padding-top: 16px;

}



/* The Modal (background) */

.modal {

  /* Hidden by default */

  position: fixed; /* Stay in place */

  z-index: 1; /* Sit on top */

  left: 0;

  top: 0;

  width: 100%; /* Full width */

  height: 100%; /* Full height */

  overflow: auto; /* Enable scroll if needed */

 

  padding-top: 0px;

}



/* Modal Content/Box */

.modal-content {

  background-color: #fefefe;

  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */

  border: 1px solid #888;

  width: 80%; /* Could be more or less, depending on screen size */

}



/* The Close Button (x) */

.close {

  position: absolute;

  right: 25px;

  top: 0;

  color: #000;

  font-size: 35px;

  font-weight: bold;

}



.close:hover,

.close:focus {

  color: red;

  cursor: pointer;

}



/* Add Zoom Animation */

.animate {

  -webkit-animation: animatezoom 0.6s;

  animation: animatezoom 0.6s

}



@-webkit-keyframes animatezoom {

  from {-webkit-transform: scale(0)} 

  to {-webkit-transform: scale(1)}

}

  

@keyframes animatezoom {

  from {transform: scale(0)} 

  to {transform: scale(1)}

}



/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {

  span.psw {

     display: block;

     float: none;

  }

  .cancelbtn {

     width: 100%;

  }

}

</style>

</head>

<body>




<div id="id01" class="modal">

  

  <form class="modal-content animate" action="#" method="post"  style="width:70%;">

    <div class="imgcontainer">

    

    <h1>SCHOOL MANAGMENT PORTAL</h1>
    <h3><?php echo $msg;?></h3>
    </div>

    <div class="container">
	<form method="post" style="width:100%;">


    <input type="text" name="schoolname" placeholder="School name" style="width:49%;"/>

      
      <input type="text" placeholder="Enter Username" name="uname" required style="width:49%;"/>

      
      <input type="password" placeholder="Enter Password" name="psw" required style="width:49%;"/>

   
      <input type="text" name="reg" placeholder="Reg." style="width:49%;"/>

      <input type="text" name="Dise" placeholder="School Dise" style="width:49%;"/>

      <input type="text" name="scode" placeholder="Scode" style="width:49%;"/>

      <input type="text" name="schooladdress" placeholder="School address" style="width:49%;"/>

      <input type="text" name="year" placeholder="year" style="width:49%;"/>
		

      <button type="submit" name="submit">register</button>


</form>
    </div>



    

  </form>

</div>







</body>

</html>

