<?php include "header.php";?>
    <div class="contenier">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- The Modal -->

<script>

function showUserr(str) {

  if (str == "") {

    document.getElementById("txtHintt").innerHTML = this.responseText;

    return;

  } else {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("txtHintt").innerHTML = this.responseText;

      }

    };

    xmlhttp.open("GET","staf_view.php?q="+str,true);

    xmlhttp.send();

  }

}

   

</script>

<h2 onload="showUser(this.' ')" class="addst">Staff List <a href="add_staf.php">Add Staff</a></h2>
<?php
 $current_user = $_SESSION['id'];
			$sql="SELECT * FROM scl_staff WHERE parent= $current_user ";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0){
			echo '
			<table border="1" cellpadding="5" cellspacing="5" class="table" id="filterTable" style="display: inline-table; width:100%">
				<thead>
				<tr>
					<th scope="col">No.</th>  
					<th scope="col">Name</th>
					<th scope="col">Subject</th>
					<th scope="col">Phone</th>
					<th scope="col">Adress</th>
					<th scope="col">Action</th>
				</tr>
				</thead>
				';
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
				echo '<tr>
						<td scope="col">'.$i.'</td>
						<td scope="col">'.$row['fullname'].'</td>
						<td scope="col">'.$row['designation'].'</td>
						<td scope="col">'.$row['mobileno'].'</td>
						<td scope="col">'.$row['address'].'</td>
						<td scope="col">
						<a href="delete-staff.php?sid='.$row['id'].'"><i class="fa-solid fa-trash"></i></a>
						<a href="update-staff.php?sid='.$row['id'].'"><i class="fa fa-edit"></i></a>
						<a href="staff_details.php?sid='.$row['id'].'"><i class="fa fa-search"></i></a>
						</td>
						</tr>';
					$i++;
			}
			echo '</table>';
			}
			else{
				echo 'Table is empty no record found.';
			}
		?>


  <!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">

    

      <!-- Modal content-->

      <div class="modal-content">

        

        <div class="modal-body">

          <div id="txtHintt"><b>Person info will be listed here.</b></div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="button" onclick="window.print();return false;">Print</button>

        </div>

      </div>

      

    </div>

  </div>

  





</div>
   
    </div>
   </body>
</html>