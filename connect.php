<?php
$siteurl="https://adroittechnosoft.in/demo/school/";

if (isset($_POST['chngyear'])) {
    $year = $_POST['chngyear'];
    setcookie('adt_year', $_POST['chngyear'], time() + (86400 * 30), "/");
}
elseif (isset($_COOKIE['adt_year'])) {
    $year = $_COOKIE['adt_year'];
}
else {
    $year = date("Y");
}
$servername="localhost";
$username="u393171795_kunalchoudhary";
$password="Shail@123";
$database="u393171795_school";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
	//echo'connected';
}else{
	echo'not connected'.mysqli_connect_error;
}
?>