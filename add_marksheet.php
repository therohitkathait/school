<script>
    function calculateMarks() {
        const rows = document.querySelectorAll('.marks-row');
        let totalObtMarks = 0;
        let totalhalfMarks = 0;
        let totalprjMarks = 0;
        let totalgrandMarks = 0;
        let allsummarks = 0;
        rows.forEach(row => {
            const obtMarksInput = row.querySelector('.obtmarks-input');
            const halfYearInput = row.querySelector('.halfyear-input');
            const projectInput = row.querySelector('.project-input');
            const result = row.querySelector('.marks-result');
            const gradeCell = row.querySelector('.marks-grade');

            const obtMarks = parseFloat(obtMarksInput.value) || 0;
            const halfYearMarks = parseFloat(halfYearInput.value) || 0;
            const projectMarks = parseFloat(projectInput.value) || 0;
			
            const sum = obtMarks + halfYearMarks + projectMarks;
            result.textContent = + sum;
				totalMarks =+ sum;
				
            const grade = getGrade(sum);
            gradeCell.textContent = grade;
			totalgrandMarks +=totalMarks
            totalObtMarks += obtMarks;
            totalhalfMarks += halfYearMarks;
            totalprjMarks += projectMarks;
        });
		const overallPercentage = (totalgrandMarks / 600) * 100;
		const overallGrade = getGrade(overallPercentage);
		document.getElementById('overall-grade').textContent = overallGrade;
		document.getElementById('total-marks').textContent = totalgrandMarks;
        document.getElementById('total-obt-marks').textContent = totalObtMarks;
        document.getElementById('total-half-marks').textContent = totalhalfMarks;
        document.getElementById('total-prj-marks').textContent = totalprjMarks;
    }

    function getGrade(marks) {
          if (marks >= 90) {
            return "A+";
        } else if (marks >= 80) {
            return "A";
        } else if (marks >= 60) {
            return "B";
        } else if (marks >= 45) {
            return "C";
        } else if (marks >= 33) {
            return "D";
        } else {
            return "F";
        }
    }
</script>

<?php
include "connect.php";
session_start();
$current_user = $_SESSION['id'];

$sql = "SELECT * FROM scl_update WHERE id=$current_user";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $register = $row['register'];
        $sclname = $row['sclname'];
        $scode = $row['scode'];
        $dise = $row['dise'];
        $year = $row['year'];

        $i++;
    }
}

$sid = $_GET['stid'];
$sql1 = "SELECT * FROM addstudent WHERE id='$sid'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    $i = 1;
    while ($row = mysqli_fetch_assoc($result1)) {
        $stdn_id = $row['id'];
        $fullname = $row['fullname'];
        $fathername = $row['fathername'];
        $mothername = $row['mothername'];
        $rollnumber = $row['rollnumber'];
        $dateofbirth = $row['dateofbirth'];
        $category = $row['category'];
        $class = $row['class'];
        $samgrano = $row['samgrano'];
        $studentimg = $row['studentimg'];
        $imagePath = 'http://localhost/adroit-software/upload_img/' . $row['studentimg'];

        $i++;
    }
}
?>

<div style="float:left;">School Code:- <?php echo $scode; ?></div>
<div style="float:right;">Reg. <?php echo $register; ?></div>

<br>

<p style="text-align:center;">
    School Code:- <?php echo $scode; ?> Reg. <?php echo $register; ?>
</p>

<h1 style="text-align:center;"><?php echo $sclname; ?></h1>
<h3 style="text-align:center;"><?php echo $year; ?></h3>

<br><br>

<table style="width:80%;float: left; margin-bottom: 4%;">
    <tr>
        <td style="width:24%;">school Name</td>
        <td style="width:75%;"><?php echo $dise . ' ' . $sclname; ?></td>
    </tr>
    <tr>
        <td style="width:24%;">Roll Number/Samagra</td>
        <td style="width:75%;"><?php echo $rollnumber . ' / ' . $samgrano; ?></td>
    </tr>
    <tr>
        <td style="width:24%;">Name</td>
        <td style="width:75%;"><?php echo $fullname; ?></td>
    </tr>
    <tr>
        <td style="width:24%;">Father Name</td>
        <td style="width:75%;"><?php echo $fathername; ?></td>
    </tr>
    <tr>
        <td style="width:24%;">Mother Name</td>
        <td style="width:75%;"><?php echo $mothername; ?></td>
    </tr>
    <tr>
        <td style="width:24%;">D.O.B</td>
        <td style="width:75%;"><?php echo $dateofbirth; ?></td>
    </tr>
</table>

<img src="upload_img/<?php echo $studentimg; ?>" style="float: left;height: 90px;margin-left: 16px;">

<br><br>
<br><br>
<br><br>
<br><br>

<form method="post">
<div style="width:100%;">
    <table style="width:60%;height:50%; float:left;">
        <tr>
            <td>Subject</td>
            <td>Total Marks</td>
            <td>Obt Marks(60)</td>
            <td>Half-Yearly<br>Marks(20)</td>
            <td>Project<br>Marks(20)</td>
            <td>Marks Sum</td>
            <td>Grade</td>
        </tr>

        <?php
        $subjects = [
            "Hindi",
            "English",
            "Science",
            "Maths",
            "Sst",
            "EVS"
        ];
		$grand =0;
		$allobtmarks = 0;
		$allhalfmarks = 0;
		$allprojectmarks = 0;
		$allsummarks = 0;
		$alltotalmarks = 0;
		$failureCount = 0;
		$scltotal = 0;
        foreach ($subjects as $subject) {
            $checkSql = "SELECT * FROM marksheet WHERE subject = '$subject' AND student = '$stdn_id'";
            $checkResult = mysqli_query($conn, $checkSql);
            $existingRow = mysqli_fetch_assoc($checkResult);

            if (isset($existingRow['obtmarks']) && isset($existingRow['halfyear']) && isset($existingRow['project'])) {
                $obtMarks = $existingRow['obtmarks'];
                $halfYearMarks = $existingRow['halfyear'];
                $projectMarks = $existingRow['project'];
            } else {
                $obtMarks = '0';
                $halfYearMarks = '0';
                $projectMarks = '0';
            }

            $subjectValue = $subject;
            $totalMarks = isset($_POST['total'][$subject]) ? $_POST['total'][$subject] : '100';
            $obtMarks = isset($_POST['obtmarks'][$subject]) ? $_POST['obtmarks'][$subject] : $obtMarks;
            $halfYearMarks = isset($_POST['halfyear'][$subject]) ? $_POST['halfyear'][$subject] : $halfYearMarks;
            $projectMarks = isset($_POST['project'][$subject]) ? $_POST['project'][$subject] : $projectMarks;
			$grand = $obtMarks + $halfYearMarks + $projectMarks;
			$allobtmarks += $obtMarks;
			$allhalfmarks += $halfYearMarks;
			$allprojectmarks += $projectMarks;
			$alltotalmarks += $totalMarks;
			$allsummarks += $grand;
			$grade = '';
            
            if ($grand >= 90) {
                $hgrade = 'A+';
            } elseif ($grand >= 80) {
                $hgrade = 'A';
            } elseif ($grand >= 60) {
                $hgrade = 'B';
            } elseif ($grand >= 45) {
                $hgrade = 'C';
            } elseif ($grand >= 33) {
                $hgrade = 'D';
            } else {
                $hgrade = 'F';
				$failureCount++;
            }
			 if ($failureCount > 2) {
				$overallResult = 'Fail';
			} else {
				$overallResult = 'Pass';
			}
			
			$totalprsnt = $alltotalmarks;
			$specific_value = $allsummarks;
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
            if (isset($_POST['mrksubmit'])) {
                if ($existingRow) {
                    $updateSql = "UPDATE marksheet SET totalmarks = '$totalMarks', obtmarks = '$obtMarks', halfyear = '$halfYearMarks', project = '$projectMarks' WHERE subject = '$subject' AND student = '$stdn_id'";
                    mysqli_query($conn, $updateSql);
                } else {
                    $insertSql = "INSERT INTO marksheet (student, class, subject, totalmarks, obtmarks, halfyear, project, parent,year) 
                    VALUES ('$stdn_id', '$class', '$subjectValue', '$totalMarks', '$obtMarks', '$halfYearMarks', '$projectMarks', '$current_user','$year')";
                    mysqli_query($conn, $insertSql);
                }
            }
        ?>
    <tr class="marks-row">
		<td><input type="text" name="subject[<?php echo $subject; ?>]" value="<?php echo $subject; ?> " readonly></td>
		<td><input type="number" name="total[<?php echo $subject; ?>]" value="<?php echo $totalMarks; ?>" readonly></td>
		<td><input type="number" name="obtmarks[<?php echo $subject; ?>]" class="obtmarks-input marks-input" oninput="calculateMarks()" value="<?php echo $obtMarks; ?>" max="60"></td>
		<td><input type="number" name="halfyear[<?php echo $subject; ?>]" class="halfyear-input marks-input" oninput="calculateMarks()" value="<?php echo $halfYearMarks; ?>" max="20"></td>
		<td><input type="number" name="project[<?php echo $subject; ?>]" class="project-input marks-input" oninput="calculateMarks()" value="<?php echo $projectMarks; ?>" max="20"></td>
		<td><p class="marks-result"><?php echo $grand; ?></p></td>
		<td class="marks-grade"><?php echo $hgrade; ?></td>
	</tr>
        <?php
        }
		echo'<tr>
			<td>Grand Total</td>
			<td>' .$alltotalmarks. '</td>
			<td id="total-obt-marks">' . $allobtmarks . '</td>
			<td id="total-half-marks">' . $allhalfmarks . '</td>
			<td id="total-prj-marks">' . $allprojectmarks . '</td>
			<td id="total-marks">' . $allsummarks . '</td>
			<td id="overall-grade">' . $allresult . '</td>

		</tr>';
		
        ?>
		
        <tr>
			 <td colspan="7"><input style="padding:5px 60px; margin-left:35%;" type="submit" name="mrksubmit"></td>
        </tr>
    </table>
</form>
   <form method="post">
    <table style="width:40%;height:50%;">
        <thead>
            <tr>
                <td colspan="4" class="center">co-scholastic area</td>
            </tr>
            <tr>
                <th>subject</th>
                <th>marks(100)</th>
                <th>subject</th>
                <th>marks(100)</th>
            </tr>
        </thead>
        <tbody>
           
	<?php
	

	if(isset($_POST['sclsubmit'])){
		 $Literary = $_POST['Literary'];
		$cultural = $_POST['cultural'];
		$scientificity = $_POST['scientificity'];
		$creative = $_POST['creative'];
		$sports = $_POST['sports'];
		$regularity = $_POST['regularity'];
		$hygiene = $_POST['hygiene'];
		$dutiful = $_POST['dutiful'];
		$cooperation = $_POST['cooperation'];
		$environmental = $_POST['environmental'];
		$Honesty = $_POST['Honesty'];
$scltotal = $Literary + $cultural + $scientificity + $creative + $sports + $regularity + $hygiene + $dutiful + $cooperation + $environmental + $Honesty;

		$sql3 = "SELECT * FROM socialqualitie WHERE student = '$stdn_id'";
		$result3 = mysqli_query($conn, $sql3);
		   if (mysqli_num_rows($result3) > 0) {
		$updateSql = "UPDATE socialqualitie SET ";
        $updateSql .= "Literary = $Literary, ";
        $updateSql .= "cultural = $cultural, ";
        $updateSql .= "scientificity = $scientificity, ";
        $updateSql .= "creative = $creative, ";
        $updateSql .= "sports = $sports, ";
        $updateSql .= "regularity = $regularity, ";
        $updateSql .= "hygiene = $hygiene, ";
        $updateSql .= "dutiful = $dutiful, ";
        $updateSql .= "cooperation = $cooperation, ";
        $updateSql .= "environmental = $environmental, ";
        $updateSql .= "Honesty = $Honesty ";
        $updateSql .= "WHERE student = '$stdn_id'";
		
		 if (mysqli_query($conn, $updateSql)) {
            echo "Data updated successfully.";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
		   }else{
			    $insertSql = "INSERT INTO socialqualitie (student, Literary, cultural, scientificity, creative, sports, regularity, hygiene, dutiful, cooperation, environmental, Honesty,parent) ";
        $insertSql .= "VALUES ('$stdn_id', $Literary, $cultural, $scientificity, $creative, $sports, $regularity, $hygiene, $dutiful, $cooperation, $environmental, $Honesty, $current_user)";

        if (mysqli_query($conn, $insertSql)) {
            echo "Data inserted successfully.";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }

		   }
	}
$sql3 = "SELECT * FROM socialqualitie WHERE student = '$stdn_id'";
$result3 = mysqli_query($conn, $sql3);
$row = mysqli_fetch_assoc($result3);


echo '<tr>';
    echo '<td>Literary</td>';
    echo '<td class="sclrow"><input type="number" name="Literary" value="' . (isset($row['Literary']) ? (float)$row['Literary'] : '') . '"></td>';

    echo '<td>cultural</td>';
    echo '<td class="sclrow"><input type="number" name="cultural" value="' . (isset($row['cultural']) ? (float)$row['cultural'] : '') . '"></td>';
 echo '</tr>';
    echo '<td>scientificity</td>';
    echo '<td class="sclrow"><input type="number" name="scientificity" value="' . (isset($row['scientificity']) ? (float)$row['scientificity'] : '') . '"></td>';

    echo '<td>creative</td>';
    echo '<td class="sclrow"><input type="number" name="creative" value="' . (isset($row['creative']) ? (float)$row['creative'] : '') . '"></td>';
 echo '<tr>';
    echo '<td>sports</td>';
    echo '<td class="sclrow"><input type="number" name="sports" value="' . (isset($row['sports']) ? (float)$row['sports'] : '') . '"></td>';

    echo '<td>regularity</td>';
    echo '<td class="sclrow"><input type="number" name="regularity" value="' . (isset($row['regularity']) ? (float)$row['regularity'] : '') . '"></td>';
 echo '</tr>';
    echo '<td>hygiene</td>';
    echo '<td class="sclrow"><input type="number" name="hygiene" value="' . (isset($row['hygiene']) ? (float)$row['hygiene'] : '') . '"></td>';

    echo '<td>dutiful</td>';
    echo '<td class="sclrow"><input type="number" name="dutiful" value="' . (isset($row['dutiful']) ? (float)$row['dutiful'] : '') . '"></td>';
 echo '<tr>';
    echo '<td>cooperation</td>';
    echo '<td class="sclrow"><input type="number" name="cooperation" value="' . (isset($row['cooperation']) ? (float)$row['cooperation'] : '') . '"></td>';

    echo '<td>environmental</td>';
    echo '<td class="sclrow"><input type="number" name="environmental" value="' . (isset($row['environmental']) ? (float)$row['environmental'] : '') . '"></td>';
 echo '</tr>';
  echo '<tr>';
    echo '<td>Honesty</td>';
    echo '<td class="sclrow"><input type="number" name="Honesty" value="' . (isset($row['Honesty']) ? (float)$row['Honesty'] : '') . '"></td>';
	echo '<td colspan="2"> <input style="padding:5px 30px; margin-left:25%;" type="submit" name="sclsubmit" value="socialSubmit"></td>';
    echo '</tr>';
 
 

?>


     </tbody>
    </table>
   
</form>

	</div>
   


<br><br><br><br>

<br><br>

<div style="float:left;">Class Teacher Signature</div>
<div style="float:right;">Principal Signature</div>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
	.marks-row input , .sclrow input{
		width:100;
	}
</style>
