
<h3>Add Class & Fees</h3>

	<?php
	
	$current_user = $_SESSION['id'];

if(isset($_POST['feessub'])){
	$class=$_POST['class'];
	$fees=$_POST['fees'];


	$sql="INSERT INTO scl_addfees (class,fees,parent) VALUES('$class','$fees','$current_user')";
	
	if(mysqli_query($conn,$sql)){
		$msg='data inserted';
	}else{
		$msg='data not inserted';
	}
}
?>


  <table>

      <tr>
	  <td>
	  <form action="" method="post">
	  <input type="text" name="class" placeholder="class" required/>
	  </td>
	  <td>
	  <input type="text" name="fees" value="" Placeholder="Fees"/>
	  </td>
	  <td>
	  <input type="submit" name="feessub" value="add"/>
	  </form>
	  </td>
	  </tr>
</table>
<?php
    $sql = "SELECT * FROM scl_addfees WHERE parent='$current_user' ORDER BY order_column";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '
        <table id="feesTable" border="1" cellpadding="5" cellspacing="5">
            <thead>
                <tr>
                    <th>class</th>
					 <th>fees</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
        ';
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr class="draggable-row" data-id="' . $row['id'] . '">
                    <td>' . $row['class'] . '</td>
                    <td>' . $row['fees'] . '</td>
                    <td><a href="delete-fees.php?sid=' . $row['id'] . '"><i class="fa-solid fa-trash"></i></a></td>
                </tr>';
            $i++;
        }
        echo '</tbody></table>';
    } else {
        echo 'Table is empty, no records found.';
    }
    ?>
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="script.js"></script>

 </body>
</html>
