<?php include "header.php";?>

<div class="contenier">

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

		xmlhttp.open("GET","fess_list_ajax.php?q="+str,true);

		xmlhttp.send();

	  }

	}
</script>
<?php
$current_user = $_SESSION['id'];
include "connect.php";
$msg='';
if(isset($_POST['submit'])){
	$dis=$_POST['dis'];
	$amount=$_POST['amount'];

	$sql="INSERT INTO scl_dailyspend (disc,amount,parent,year) VALUES('$dis','$amount','$current_user','$year')";
	
	if(mysqli_query($conn,$sql)){
		$msg='spend inserted';
	}else{
		$msg='spend not inserted';
	}
}
?>

<div class="fess_list">

    <h3>Daily Spend</h3>
    <h3><?php echo $msg;?></h3>

	<table style="margin-bottom: 20px !important;">
		<tr>
		<td>
			<form action="" method="post" style="padding: 0px;">
			<input type="text" name="dis" Placeholder="Description" required/>
		</td>
		<td>
			<input type="number" name="amount"  Placeholder="Amount" required/>
		</td>
		<td>
			<input type="submit" name="submit"/>
			</form>
		</td>
		</tr>
	</table>

	<div class="filter">
		<div class="category-filter">
			<select id="categoryFilter" class="form-control">
				<option value="">Show All</option>
			</select>
		</div>
	</div>
</div>

<div id="txtHint">
<?php
	  $sql="SELECT * FROM scl_dailyspend WHERE year = $year AND parent=$current_user";
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
						<td><a href="delete-amount.php?sid='.$row['id'].'"><i class="fa-solid fa-trash"></i></a></td>
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

     

  <!-- Modal -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
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

<script>

  $("document").ready(function () {

		$("#filterTable").dataTable({

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

      var table = $('#filterTable').DataTable();



      //Take the category filter drop down and append it to the datatables_filter div. 

      //You can use this same idea to move the filter anywhere withing the datatable that you want.

      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));

      

      //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)

      //This tells datatables what column to filter on when a user selects a value from the dropdown.

      //It's important that the text used here (Category) is the same for used in the header of the column to filter

      var categoryIndex = 0;

      $("#filterTable th").each(function (i) {

        if ($($(this)).html() == "Class") {

          categoryIndex = i; return false;

        }

      });



      //Use the built in datatables API to filter the existing rows by the Category column

      $.fn.dataTable.ext.search.push(

        function (settings, data, dataIndex) {

          var selectedItem = $('#categoryFilter').val()

          var category = data[categoryIndex];

          if (selectedItem === "" || category.includes(selectedItem)) {

            return true;

          }

          return false;

        }

      );



      //Set the change event for the Category Filter dropdown to redraw the datatable each time

      //a user selects a new filter.

      $("#categoryFilter").change(function (e) {

        table.draw();

      });



      table.draw();

    });

</script>

    </div>
   
    </div>
   </body>
</html>