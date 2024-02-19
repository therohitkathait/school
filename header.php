<?php 
session_start();

if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
{
	header("location:index.php");
}
 include "connect.php";


?>

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

    <?php include "sidebaar.php";?>

<div id="main">

 

    <header>

        <h1 style="display: flex;"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <form method="post" style="height: 8px; margin: 5px; padding: 0px 0px 27px 13px;text-align: end; 
        margin-right: 35px;" >
		<select id="myDropdown" type="select" name="chngyear" style="padding: 4px 8px; 
		    margin-bottom: 20px; background: transparent; border: 1px solid #000;" onchange="this.form.submit()">
			<?php
			$current_user = $_SESSION['id'];
			$sql="SELECT DISTINCT year FROM `addstudent` WHERE parent = $current_user";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result))
			{ ?>
			

		 <option value="<?php echo $row['year']; ?>" <?php if ($row['year'] == $_POST['chngyear']) echo 'selected'; ?>><?php echo $row['year']; ?></option>
			<?php }
				?>
		</select>
		
	</form>
	
        <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></h1>

    </header>
 