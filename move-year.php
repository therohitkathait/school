<?php
include "header.php";

$sql2 = "SELECT * FROM addstudent WHERE year = $year AND parent = '$current_user'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // Output table header and start of table body
    echo '<br><br>
        <table border="1" cellpadding="5" cellspacing="5" class="table" id="filterTable" style="display: inline-table; width:100%">
            <thead>
            <tr>
                <th scope="col">No.</th>  
                <th scope="col">Student Name</th>
                <th scope="col">Father Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Class</th>
                <th scope="col">Year</th>
            </tr>
            </thead>
            <tbody>';

    $i = 1;
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $crntyear = $row2['year'] + 1;
        $stdclass = $row2['class'];

        $sql = "SELECT order_column FROM scl_addfees WHERE parent = '$current_user' AND class = '$stdclass' ORDER BY order_column";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if(isset($row['order_column'])){
        $orderclm = $row['order_column'] + 1;

        $sql3 = "SELECT class FROM scl_addfees WHERE parent = '$current_user' AND order_column = '$orderclm' ORDER BY order_column";
        $result3 = mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_assoc($result3);
        if (isset($row3['class'])) {
            $updatedClass = $row3['class'];
        } else {
            $updatedClass = 'N/A';
        }

        echo '<tr>
            <td scope="col">' . $i . '</td>
            <td scope="col">' . $row2['fullname'] . '</td>
            <td scope="col">' . $row2['fathername'] . '</td>
            <td scope="col">' . $row2['mobileno'] . '</td>
            <td scope="col">' . $updatedClass . '</td>
            <td scope="col">' . $crntyear . '</td>
            </tr>';

        if (isset($_POST['submit']) && isset($row3['class'])) {
          $sql1 = "INSERT INTO addstudent (fullname, fathername, mothername, dateofbirth, mobileno, class, rollnumber, adharno,
		  samgrano, address, gender, category, droppoint, parent, trans, rte, year, studentimg) 
                 VALUES ('" . $row2['fullname'] . "', '" . $row2['fathername'] . "', '" . $row2['mothername'] . "',
				 '" . $row2['dateofbirth'] . "', '" . $row2['mobileno'] . "', '$updatedClass', '" . $row2['rollnumber'] . "',
				 '" . $row2['adharno'] . "', '" . $row2['samgrano'] . "', '" . $row2['address'] . "', '" . $row2['gender'] . "',
				 '" . $row2['category'] . "', '" . $row2['droppoint'] . "', '" . $row2['parent'] . "', '" . $row2['trans'] . "', 
				 '" . $row2['rte'] . "', $crntyear, '" . $row2['studentimg'] . "')";

            if (mysqli_query($conn, $sql1)) {
                // Insertion successful
            } else {
                echo 'Failed to add students to the next year: ' . mysqli_error($conn);
            }
        }

        $i++;
          }  }

    // Close the table
    echo '</tbody>
        </table>';
}
?>

<form method="post" style="margin-top: -6%;">
    <button name="submit" type="submit">Move from <?php echo $year; ?> to <?php echo $crntyear; ?></button>
</form>
	