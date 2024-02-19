<?php
	include "header.php";
	$sid=$_GET['sid'];
	
	$sql="SELECT * FROM scl_staff WHERE id='$sid' ";
	
	$result=mysqli_query($conn,$sql);
    echo'<br><br>';
if(mysqli_num_rows($result)>0){
			echo '
			<table border="1" cellpadding="5" cellspacing="5" class="table" id="filterTable" style="display: inline-table; width:100%">
				<thead>
				<tr>
					<th scope="col">No.</th>  
					<th scope="col">Name</th>
                    <th scope="col">father Name</th>
                    <th scope="col">date of birth</th>
					<th scope="col">Subject</th>
					<th scope="col">Phone</th>
					<th scope="col">Adress</th>
                    <th scope="col">sallery</th>
                    <th scope="col">gender</th>
				</tr>
				</thead>
				';
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
				echo '<tr>
						<td scope="col">'.$i.'</td>
						<td scope="col">'.$row['fullname'].'</td>
                        <td scope="col">'.$row['fathername'].'</td>
                        <td scope="col">'.$row['dobirth'].'</td>
						<td scope="col">'.$row['designation'].'</td>
						<td scope="col">'.$row['mobileno'].'</td>
						<td scope="col">'.$row['address'].'</td>
                        <td scope="col">'.$row['sallery'].'</td>
                        <td scope="col">'.$row['gender'].'</td>
						
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