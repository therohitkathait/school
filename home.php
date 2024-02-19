<?php include "header.php";

?>
<div class="contenier">                

                <div class="box_wrap">

                    <div class="box30" style="height:16%;">
                        <div class="icon-box" style="height:43%;"><i class="fa-solid fa-user-graduate"></i></div><div>
						 <?php
						 
					  $sql="SELECT * FROM addstudent WHERE year= $year AND parent= $current_user";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_num_rows($result)){
						echo '<h1> '.$row.' </h1>';
				$i=1;}else {
							echo '<h1>'. 0 .'</h1>';
						}
							?>
				</div><span>Total Students</span></div>

                    

						<div class="box30" style="height:16%;">
							<div class="icon-box" style="height:43%;"><i class="fa-solid fa-user-group"></i></div><div>
							<?php
				$sql="SELECT * FROM scl_staff WHERE parent= $current_user";
			$result=mysqli_query($conn,$sql);
			if($row=mysqli_num_rows($result)){
				echo '<h1> '.$row.' </h1>';
			$i=1;}else {
							echo '<h1>'. 0 .'</h1>';
						}

				?>
			 </div><span>Total Staff</span></div>

                   

                    <div class="box30">
					   
                         <div class="icon-box" style="height:43%;"><i class="fa-solid fa-money-bill-transfer"></i></div> <h1>
								<?php
							
						$columnName = "amount";

						
						$sql = "SELECT SUM($columnName) AS total_sum FROM scl_dailyspend WHERE year=$year  AND parent= $current_user";
						$result = $conn->query($sql);

					if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $sum = $row['total_sum'];
                    
                        if ($sum === null) {
                            echo "0";
                        } else {
                            echo $sum;
                        }
                    } else {
                        echo "0";
                    }
						?>
							</h1>
						 
						 <span>Total Spend</span></div>
                         
                      
                <div class="Fessstatment" style="margin-top: 0px;">

                     <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

       <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

       <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

          <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

      

      

          

   

</script>




<div id="txtHint">

  <div class="fess_list" style="margin-top:10%;">

    <h3>Transport Amount</h3>

   


</div>
<?php
	  $sql="SELECT * FROM scl_tranfees WHERE parent=$current_user ";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0){
			echo '
			<table border="1" cellpadding="5" cellspacing="5">
				<tr>
					<th>S.no</th>
					<th>place</th>
					<th>fees</th>
					<th>action</th>
				</tr>
				';
				$i=1;
			while($row=mysqli_fetch_assoc($result))
			{
				echo '<tr>
						<td>'.$i.'</td>
						<td>'.$row['location'].'</td>
						<td>'.$row['fees'].'</td>
						<td><a href="delete-hometbl1.php?sid='.$row['id'].'"><i class="fa-solid fa-trash"></i></a></td>
						</tr>';
					$i++;
			}
			echo '</table>';
			}
			else{
				echo 'Table is empty no record found.';
			}

	  ?></div>

</div>
<div class="rightdailykharch">


<div class="fess_list">

    <h3>Daily Spend</h3>

   


</div>

<div id="txtHint">
<?php

			$sql="SELECT * FROM scl_dailyspend WHERE year = $year AND parent= $current_user";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				  echo '
				  <table class="table" id="filterTable" style="display: inline-table; width:100%">
	  
	   <thead>
	  
					  <tr>
						  <th>S.no</th>
						  <th>description</th>
						  <th>amount</th>
						  <th>date</th>
					  </tr>
					   </thead>
					   <tbody>
					  ';
					  $i=1;
				  while($row=mysqli_fetch_assoc($result))
				  {
					  echo '<tr>
							  <td>'.$i.'</td>
							  <td>'.$row['disc'].'</td>
							  <td>'.$row['amount'].'</td>
							  <td><a href="delete-hometbl2.php?sid='.$row['id'].'"><i class="fa-solid fa-trash"></i></a></td>
							  </tr>';
						  $i++;
				  }
				  echo '
				  </tbody>
				  </table>';
				  }
				  else{
					  echo 'Table is empty no record found.';
				  }
?>	  
</div>

</div>

     </div>

  <!-- Modal -->
  

  <script>

  $("document").ready(function () {





      $("#filterTable").dataTable({

        "pageLength": 10,

        "searching": true,

        dom: 'Bfrtip',

        buttons: [

        {

            extend: 'pdf',

            text: 'Download Pdf',

            exportOptions: {

                modifier: {

                    page: 'current'

                }

            }

        }

    ]

       

      });



      //Get a reference to the new datatable

     

$("#filterTables").dataTable({

        "pageLength": 10,

        "searching": true,

        dom: 'Bfrtip',

        buttons: [

        {

            extend: 'pdf',

            text: 'Download Pdf',

            exportOptions: {

                modifier: {

                    page: 'current'

                }

            }

        }

    ]

       

      });



      //Get a reference to the new datatable

     


      table.draw();

    });

</script>


                </div>

                </body>

</html>

