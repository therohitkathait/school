<?php
include "connect.php";
session_start();
$current_user = $_SESSION['id'];

$sql="SELECT * FROM scl_update WHERE id=$current_user";
	

	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
			$register=$row['register'];
			$sclname=$row['sclname'];
			$scode=$row['scode'];
			$dise=$row['dise'];
			$year1=$row['year'];
          
			$i++;
	  }}
	  
	  $sid=$_GET['stid'];
	$sql1="SELECT * FROM addstudent WHERE id='$sid'";
	

	$result1=mysqli_query($conn,$sql1);
	  if(mysqli_num_rows($result1)>0){
				$i=1;
			while($row=mysqli_fetch_assoc($result1))
			{	
				$stdnno=$row['id'];
				$fullname=$row['fullname'];
				$fathername=$row['fathername'];
				$mothername=$row['mothername'];
				$rollnumber=$row['rollnumber'];
				$dateofbirth=$row['dateofbirth'];
				$category=$row['category'];
				$class=$row['class'];
				$samgrano=$row['samgrano'];
			    $studentimg=$row['studentimg'];       
				$imagePath = $siteurl . '/upload_img/' . $row['studentimg'];
					$i++;
			}
			}
$html = "
<h1 style=\"text-align:center;\">Rajya Shiksha Kendra (M.P.)</h1>
<h3 style=\"text-align:center;\">Annual Exam Result $year1 (CLASS-$class)</h3>
<br>
<table style=\"width:80%;float: left; margin-bottom: 4%;\">
<tr>
	<td style=\"width:24%;\">school Name</td>
	<td style=\"width:75%;\">$dise $sclname </td></tr>
	<tr>
	<td style=\"width:24%;\">Roll Number/Samagra</td>
	<td style=\"width:75%;\">$rollnumber / $samgrano</td></tr>
	<tr>
	<tr>
	<td style=\"width:24%;\">Name</td>
	<td style=\"width:75%;\">$fullname </td></tr>
	<tr>
	<td style=\"width:24%;\">Father Name</td>
	<td style=\"width:75%;\">$fathername</td></tr>
	<tr>
	<td style=\"width:24%;\">Mother Name</td>
	<td style=\"width:75%;\">$mothername</td></tr>
	<tr>
	<td style=\"width:24%;\">D.O.B</td>
	<td style=\"width:75%;\">$dateofbirth</td></tr>

</table>

<img src=\"$imagePath\" style=\"float: left;height: 90px;margin-left: 16px; margin-top: 20px;\">
<br><br>
<br><br>
<br><br>
<br><br>
<div class=\"main-section\">";

$sql3 = "SELECT * FROM socialqualitie WHERE student = '$stdnno'";
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {
    $html .="<div class=\"table-container_two\">
    <table class=\"secondary-table\">
        <thead>
            <tr>
            <td colspan=\"4\" class=\"center\">co-scholastic area</td>
            </tr>
            <tr>
                <th>subject</th>
                <th>grade</th>
                <th>subject</th>
                <th>grade</th>
            </tr>
        </thead>
        <tbody>";


    if ($row = mysqli_fetch_assoc($result3)) {
        $i = 0;
		$scltotal = 0; 
        foreach ($row as $field => $value) {
            if ($field === 'student' || $field === 'parent' || $field === 'id') {
                continue;
            }

            if ($i % 2 == 0) {
                $html .= '<tr>';
            }

            $html .= '<td>' . $field . '</td>';

            // Convert the marks to grade
            $grade = '';
            $marks = (float)$value;
            if ($marks >= 90) {
                $grade = 'A+';
            } elseif ($marks >= 80) {
                $grade = 'A';
            } elseif ($marks >= 60) {
                $grade = 'B';
            } elseif ($marks >= 45) {
                $grade = 'C';
            } elseif ($marks >= 33) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
    
            $html .= '<td>' .  $grade . '</td>';
      $scltotal += $value;
            $i++;
    

            if ($i % 2 == 0) {
                $html .= '</tr>';
            }
        }

        if ($i % 2 != 0) {
            $html .= '<td></td><td></td></tr>';
        }
    }

    $html .= "</tbody></table></div>";
} else {
    $html .= '<div>No data found.</div>';
}

$html .= "<div class=\"table-container_one\">
<table class=\"main-table\">
    <tr>
        <td>Subject</td>
        <td>Total Marks</td>
        <td>Obt Marks(60)</td>
        <td>Half-Yearly(20)</td>
        <td>Project(20)</td>
        <td>Marks Sum</td>
        <td>Grade</td>
    </tr>";

$sql2 = "SELECT * FROM marksheet WHERE student='$sid'";
$result2 = mysqli_query($conn, $sql2);
$allobtmarks = 0;
$allhalfmarks = 0;
$allprojectmarks = 0;
$allsummarks = 0;
$alltotalmarks = 0;

if (mysqli_num_rows($result2) > 0) {
$i = 1;
$failureCount = 0;

while ($row = mysqli_fetch_assoc($result2)) {
    $snumber = $i;
    $subject = $row['subject'];
    $obtmarks = $row['obtmarks'];
    $halfyear = $row['halfyear'];
    $project = $row['project'];
    $totalmarks = $row['totalmarks'];
    $grand = $obtmarks + $halfyear + $project;

    // Calculate the grade based on marks
    $resultt = "";
    if ($grand >= 90) {
        $resultt = 'A+';
    } elseif ($grand >= 80) {
        $resultt = 'A';
    } elseif ($grand >= 60) {
        $resultt = 'B';
    } elseif ($grand >= 45) {
        $resultt = 'C';
    } elseif ($grand >= 33) {
        $resultt = 'D';
    } else {
        $resultt = 'F';
        $failureCount++;
    }

    // Apply the if-else condition based on the failure count
    if ($failureCount > 2) {
        $overallResult = 'Fail';
    } else {
        $overallResult = 'Pass';
    }

    // Accumulate the values
    $allobtmarks += $row['obtmarks'];
    $allhalfmarks += $row['halfyear'];
    $allprojectmarks += $row['project'];
    $alltotalmarks += $row['totalmarks'];
    $allsummarks += $grand;

    //FOR PERSENTAGE AND OVERALL GRADE
    $totalprsnt = $alltotalmarks + 1100;
    $specific_value = $allsummarks +$scltotal;
    $percentage = ($specific_value / $totalprsnt) * 100;
    $allresult = "";
    if ($percentage >= 90) {
        $allresult = 'A+';
    } elseif ($percentage >= 80) {
        $allresult = 'A';
    } elseif ($percentage >= 60) {
        $allresult = 'B';
    } elseif ($percentage >= 45) {
        $allresult = 'C';
    } elseif ($percentage >= 33) {
        $allresult = 'D';
    } else {
        $allresult = 'F';
    } 
    // Build the table row
    $html .= "<tr>
        <td>" . $subject . "</td>
        <td>" . $totalmarks . "</td>
        <td>" . $obtmarks . "</td>
        <td>" . $halfyear . "</td>
        <td>" . $project . "</td>
        <td>" . $grand . "</td>
        <td>" . $resultt . "</td>
    </tr>";

    $i++;
}
}

$html .= "<tr style=\"font-weight:700\">
<td>Grand Total</td>
<td>" . $alltotalmarks . "</td>
<td>" . $allobtmarks . "</td>
<td>" . $allhalfmarks . "</td>
<td>" . $allprojectmarks . "</td>
<td>" . $allsummarks . "</td>
<td>" . $allresult . "</td>
</tr>
<tr>	
<td colspan=\"7\"><b>Student's Exam Result: " . $overallResult . "</b></td>
</tr>
</table>
</div></div>
<br><br><br><br>
<br><br><br><br> 
<br><br> 
<div style=\"float:left;\">Class Teacher Signature</div><div style=\"float:right;\">Principal Signature</div>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.main-section{
    width: 100%;
    margin-top: 20px;
}
    .table-container_one{
        width: 57%;
        margin-top: 20px;
    }
    .table-container_two{
        width: 20%;
        margin-left:-109px;
        float: left;
    }
    .main-table {
        width: 100%;
        border-collapse: collapse;
        height:60%;
    }

    .main-table th, .main-table td {
        border: 1px solid black;
        padding: 5px;
    }

    .secondary-table {
        width: 40%;
        margin-left: 2%;
        border-collapse: collapse;
         height:60%;
    }

    .secondary-table th, .secondary-table td {
        border: 1px solid black;
        padding: 5px;
    }

    .center {
        text-align: center;
    }
</style>";


// ...


	
$filename = "marksheet";
if(isset($_GET['html'])){
echo $html; die();
}
// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);
$dompdf->set_option('isRemoteEnabled', true);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename,array('Attachment'=>0));
?>