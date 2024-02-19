
   
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

  

    <div class="contenier"><style type="text/css">
  button.btn.btn-info.btn-lg i {
    background: #5cb5b5;
    color: #fff;
    padding: 4px;
    font-size: 12px;
}
</style>
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

function oldfess(str) {

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

    xmlhttp.open("GET","add_oldfess.php?q="+str,true);

    xmlhttp.send();

  }

}

function oldfesss(str) {

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

    xmlhttp.open("GET","fess_pay.php?q="+str,true);

    xmlhttp.send();

  }

}

function oldfessst(str) {

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

    xmlhttp.open("GET","add_discount.php?q="+str,true);

    xmlhttp.send();

  }

}
   

</script>


<div class="fess_list">

    <h2 class="addst">Student Fess List <a href="statment.php">Fees Statmetn</a></h2>

<div class="filter">

      <div class="category-filter">

      <select id="categoryFilter" class="form-control">

       <option value="">Show All</option>

            <option value="1st">1St</option>

            <option value="2nd">2nd </option>

            <option value="3rd">3rd</option>

            <option value="4th">4th</option>

            <option value="5th">5th</option>

            <option value="6th">6th</option>

            <option value="7th">7th</option>

      </select>

    </div>

</div>

</div>

<div id="txtHint">

<table class="table" id="filterTable" style="display: inline-table; width:100%">

 <thead>

  <tr>

        <th scope="col">No</th>

        <th scope="col">Name</th>

        <th scope="col">Class</th>

        <th scope="col">School Fees</th>

        <th scope="col">Bus Fees</th>

        <th scope="col">Previous Fees</th>

        <th scope="col">Dis.</th>

        <th scope="col">Total Fees</th>

        <th scope="col">Dip. Fees</th>

        <th scope="col">Due Fees</th>

        <th scope="col">Action</th>

  </tr>

 </thead>

 <tbody>


    <tr>

        <td scope="col">1 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="85" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">Amit Malviya </br>S/O Chandrapal Malviya</td>

        <td scope="col">3rd</td>

        <td scope="col">7000</td>

        <td scope="col">0</td>

        <td scope="col">1001</td>
 
        <td scope="col">500</td>

        <td scope="col">7501</td>

        <td scope="col">1000</td>

        <td scope="col">6501<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="85" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="85" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="85" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

    </tr>

  
    <tr>

        <td scope="col">2 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="86" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">Radha Nagar </br>S/O Chandar singh</td>

        <td scope="col">1st</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">0</td>
 
        <td scope="col">0</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">5000<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="86" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="86" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="86" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

    </tr>

  
    <tr>

        <td scope="col">3 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="87" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">Vijay </br>S/O Ramchandra</td>

        <td scope="col">1st</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">0</td>
 
        <td scope="col">0</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">5000<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="87" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="87" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="87" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

    </tr>

  
    <tr>

        <td scope="col">4 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="88" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">Jaya Rathore </br>S/O Sandeep Rathore</td>

        <td scope="col">1st</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">0</td>
 
        <td scope="col">0</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">5000<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="88" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="88" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="88" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

    </tr>

  
    <tr>

        <td scope="col">5 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="89" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">Aman Patel </br>S/O Rustam Patel</td>

        <td scope="col">2nd</td>

        <td scope="col">6000</td>

        <td scope="col">0</td>

        <td scope="col">0</td>
 
        <td scope="col">0</td>

        <td scope="col">6000</td>

        <td scope="col">0</td>

        <td scope="col">6000<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="89" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="89" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="89" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

    </tr>

  
    <tr>

        <td scope="col">6 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="90" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">Sonu Sendhav </br>S/O Ramkishan Sendhav</td>

        <td scope="col">1st</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">0</td>
 
        <td scope="col">0</td>

        <td scope="col">5000</td>

        <td scope="col">0</td>

        <td scope="col">5000<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="90" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="90" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="90" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

    </tr>

  
    <tr>

        <td scope="col">7 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="91" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">Vikram </br>S/O balwant singh</td>

        <td scope="col">1st</td>

        <td scope="col">5000</td>

        <td scope="col">6000</td>

        <td scope="col">0</td>
 
        <td scope="col">1000</td>

        <td scope="col">10000</td>

        <td scope="col">0</td>

        <td scope="col">10000<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="91" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="91" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="91" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

    </tr>

  
    <tr>

        <td scope="col">8 <button style="float: left;" title="Print Fees Slip"  class="btn btn-info btn-lg" data-toggle="modal" value="96" onclick="showUserr(this.value)" data-target="#myModal"><i class="fa-solid fa-eye"></i></button></td>

        <td scope="col">karan patel </br>S/O bhagwan patel</td>

        <td scope="col">7th</td>

        <td scope="col">10000</td>

        <td scope="col">0</td>

        <td scope="col">0</td>
 
        <td scope="col">0</td>

        <td scope="col">10000</td>

        <td scope="col">0</td>

        <td scope="col">10000<span style="opacity:0;">unpaid</span></td>

        <td>

        <button style="float: left;" title="Add Old Fess"  class="btn btn-info btn-lg" data-toggle="modal" value="96" onclick="oldfess(this.value)" data-target="#myModal"><i class="fa fa-plus"></i></button>
        <button style="float: left;" title="Add Discount"  class="btn btn-info btn-lg" data-toggle="modal" value="96" onclick="oldfessst(this.value)" data-target="#myModal"><i class="fa-solid fa-percent"></i></button> 
        
        <button style="float: left;" title="Fess Submit"  class="btn btn-info btn-lg" data-toggle="modal" value="96" onclick="oldfesss(this.value)" data-target="#myModal"><i class="fa-solid fa-money-bill fa-money-bill"></i></button> 
         
        </td>

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