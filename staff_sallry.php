
   
  <!DOCTYPE html>

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

      <div id="mySidenav" class="sidenav">

         

  <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()">&times;</a>

  <a class="username" href="#"><h6>2323508097</h6></a>

   <a href="home.php">Dashbord</a>

  <a href="student_list.php">Student</a>

  <a href="staff_data.php">Staff</a>

  <a href="fess_list.php">Student Fess</a>

  <a href="attendance.php">Attendance</a>

   <a href="dailyspend.php">Daily spend</a>

   <a href="student_marksheet.php">Markseet</a>

  <a href="setting.php">Setting</a>

  <a href="data.php">Data Download</a>

</div>
 


<div id="main">

    

    <header>

        <h1><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></h1>

    </header>

  

    <div class="contenier"> <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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

<div class="fess_list">
    <h3>Salary</h3>
    <table style="margin-bottom: 20px !important;"><tr><td><form action="#" method="post" style="padding: 0px;">
    
        <select name="month">
            <option>Select Month</option>
            <option disabled  value="January">January</option>
            <option disabled value="February">February</option>
            <option disabled value="March">March</option>
            <option  value="April" >April</option>
            <option   value="May">May</option>
            <option  value="jun">jun</option>
            <option  value="july">july</option>
            <option  value="August">August</option>
            <option disabled value="September">September</option>
            <option  value="October">October</option>
            <option  value="November">November</option>
            <option  value="December">December</option>
        </select>
        
        </td><td><input type="number" name="amount"  Placeholder="Amount" required/></td><td><input type="submit" name="submit"/></form></td></tr></table>
<div class="filter">
      <div class="category-filter">
      <select id="categoryFilter" class="form-control">
       <option value="">Show All</option>
          
      </select>
    </div>
</div>
</div>
<div id="txtHint">
<table class="table" id="filterTable" style="display: inline-table; width:100%">
 <thead>
  <tr>
        <th scope="col">No</th>
        <th scope="col">Months</th>
        <th scope="col">Date</th>
        <th scope="col">Pay Amount</th>
        <th scope="col">Total Amount</th>
        <th scope="col">Action</th>
  </tr>
 </thead>
 <tbody>
    <tr>
        <td scope="col">1  </td>
        <td scope="col">January</td>
        <td scope="col">10/05/2023</td>
        <td scope="col">10000</td>
        <td scope="col">8000</td>
        <td><a href="delete_sellery.php?stid=33&stafid=80" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"> <i class="fa fa-trash-o"></i></a></td>
    </tr>
      <tr>
        <td scope="col">2  </td>
        <td scope="col">February</td>
        <td scope="col">19/05/2023</td>
        <td scope="col">9000</td>
        <td scope="col">8000</td>
        <td><a href="delete_sellery.php?stid=34&stafid=80" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"> <i class="fa fa-trash-o"></i></a></td>
    </tr>
      <tr>
        <td scope="col">3  </td>
        <td scope="col">March</td>
        <td scope="col">23/05/2023</td>
        <td scope="col">7000</td>
        <td scope="col">8000</td>
        <td><a href="delete_sellery.php?stid=35&stafid=80" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"> <i class="fa fa-trash-o"></i></a></td>
    </tr>
      <tr>
        <td scope="col">4  </td>
        <td scope="col">September</td>
        <td scope="col">20/06/2023</td>
        <td scope="col">90</td>
        <td scope="col">8000</td>
        <td><a href="delete_sellery.php?stid=36&stafid=80" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"> <i class="fa fa-trash-o"></i></a></td>
    </tr>
      <tr>
        <td scope="col">5  </td>
        <td scope="col">Select Month</td>
        <td scope="col">20/06/2023</td>
        <td scope="col">11</td>
        <td scope="col">8000</td>
        <td><a href="delete_sellery.php?stid=37&stafid=80" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"> <i class="fa fa-trash-o"></i></a></td>
    </tr>
   </tbody>
</table></div>
</div>
     
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