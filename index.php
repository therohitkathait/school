<?php
session_start();
include "connect.php";
$msg="";
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$password=$_POST['psw'];

	$sql="SELECT * FROM scl_update WHERE email='$uname' AND password='$password'";
	
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)){
    $row=mysqli_fetch_assoc($result);
		$_SESSION['id']=$row['id'];
    $_SESSION['email']=$uname;
		echo 'login succecfuly';
		header("location:home.php");
	}else{
		echo 'your email or password dosen`t match';
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

 

  padding-top: 60px;

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

  

  <form class="modal-content animate" action="" method="post">

    <div class="imgcontainer">

    

    <h1>SCHOOL MANAGMENT PORTAL</h1>

    </div>



    <div class="container">
	<form method="post">
      <label for="uname"><b>Username</b></label>

      <input type="text" placeholder="Enter Username" name="uname" required>



      <label for="psw"><b>Password</b></label>

      <input type="password" placeholder="Enter Password" name="psw" required>

        

      <button type="submit" name="submit">Login</button>

      <label>

        <input type="checkbox" checked="checked" name="remember"> Remember me

      </label>
</form>
<button><a href="schoolrugister.php" style="text-decoration:none; color:white;">register your school</a></button>
    </div>



    

  </form>

</div>







</body>

</html>

