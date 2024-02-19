<?php include "header.php";?>
    <div class="contenier"><style type="text/css">
	.Data_Wraper select {
    font-size: 16px;
    padding: 5px 33px;
    margin: 0px 30px;
}

label {
    font-size: 18px;
    margin: 10px 4px;
}

input[type="submit"] {
    width: 152px;
    background: #5cb5b5;
    padding: 10px 8px;
    font-size: 20px;
    color: #fff;
}

/*dropdown css*/
       .MultiCheckBox {
            border:1px solid #e2e2e2;
            padding: 5px;
            border-radius:4px;
            cursor:pointer;
        }

        .MultiCheckBox .k-icon{ 
            font-size: 15px;
            float: right;
            font-weight: bolder;
            margin-top: -7px;
            height: 10px;
            width: 14px;
            color:#787878;
        } 

        .MultiCheckBoxDetail {
            display:none;
            position:absolute;
            border:1px solid #e2e2e2;
            overflow-y:hidden;
        }

        .MultiCheckBoxDetailBody {
            overflow-y:scroll;
        }

            .MultiCheckBoxDetail .cont  {
                clear:both;
                overflow: hidden;
                padding: 2px;
            }

            .MultiCheckBoxDetail .cont:hover  {
                background-color:#cfcfcf;
            }

            .MultiCheckBoxDetailBody > div > div {
                float:left;
            }

        .MultiCheckBoxDetail>div>div:nth-child(1) {
        
        }

        .MultiCheckBoxDetailHeader {
            overflow:hidden;
            position:relative;
            height: 28px;
            background-color:#3d3d3d;
        }

            .MultiCheckBoxDetailHeader>input {
                position: absolute;
                top: 4px;
                left: 3px;
            }

            .MultiCheckBoxDetailHeader>div {
                position: absolute;
                top: 5px;
                left: 24px;
                color:#fff;
            }
            .checkboxm {
    float: left;
    margin: 0px 20px;
}
.MultiCheckBoxDetailBody {
    background: #fff;
}
</style>

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#class").CreateMultiCheckBox({ width: '180px', defaultText : 'Select Class', height:'250px' });
             $("#cat").CreateMultiCheckBox({ width: '180px', defaultText : 'Select category', height:'250px' });
             $("#gen").CreateMultiCheckBox({ width: '180px', defaultText : 'Select Gender', height:'250px' });
             
        });
    </script>
<div class="Data_Wraper">

	<form action="data.php" method="get" >
		<h3>Filter Data</h3>
	<div class="checkboxm">	
 <select id="class" name="class[]">
            

 <?php
 $current_user = $_SESSION['id'];
			  $sql="SELECT * FROM scl_addfees WHERE parent=$current_user ";
			  $result=mysqli_query($conn,$sql);
			  if(mysqli_num_rows($result)>0){
                
						$i=1;
                        $classcount=0;
					while($row=mysqli_fetch_assoc($result))
					{
						echo
								'<option value='.$row['class'].'>'.$row['class'].'</option>';
							$i++;
                          
					}
                 
					}
			?>

           		</select>
    </div>
    <div class="checkboxm">
		<select id="cat" name="category[]">
			<option value="General">General</option>
			<option value="obc">OBC</option>
			<option value="sc">Sc</option>
			<option value="St">St</option>
		</select>
    </div>
     <div class="checkboxm">
		<select id="gen" name="gender[]">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
    </div>
    <div class="checkboxm">
       <label> <input type="checkbox" name="rte" value="yes">RTE</label>
      
    </div></br></br>
		<h3>Select Data</h3>
        <label>Name <input id="targett" type="checkbox" name="select[]" value="fullname"></label>
        <label>Father Name <input id="targett2" type="checkbox" name="select[]" value="fathername" /></label>
        <label>Mother Name <input type="checkbox" name="select[]" value="mothername"></label>
        <label>DOB <input type="checkbox" name="select[]" value="dateofbirth"></label>
        <label>SSM id <input type="checkbox" name="select[]" value="samgrano"></label>
        <label>Aadhaar <input type="checkbox" name="select[]" value="adharno"></label>
        <label>Gender <input type="checkbox" name="select[]" value="gender"></label>
        <label>Category <input type="checkbox" name="select[]" value="category"></label>
        <label>Class <input id="targett3" type="checkbox" name="select[]" value="class"></label>
        <label>Mobile <input id="targett4" type="checkbox" name="select[]" value="mobileno"></label>
        <label>Rollnumber <input type="checkbox" name="select[]" value="rollnumber"></label>
        <input type="submit" name="submit" >

	</form>
</div>
<script>
	targett.checked = true;
	targett2.checked = true;
	targett3.checked = true;
	targett4.checked = true;
</script>
<?php
if(isset($_GET['submit'])){
	$select="*";
	$where="";
	if(isset($_GET['class'])){
		$where.=" AND class IN ('".implode("','",$_GET['class'])."')";
	}
	if(isset($_GET['category'])){
		$where.=" AND category IN ('".implode("','",$_GET['category'])."')";
	}
	if(isset($_GET['gender'])){
		$where.=" AND gender IN ('".implode("','",$_GET['gender'])."')";
	}
	if(isset($_GET['rte'])){
		$where.=" AND rte = 'yes'";
	}
	if(isset($_GET['select'])){
		$select = 'id,'.implode(',',$_GET['select']);
	}
	$sql="SELECT $select FROM addstudent WHERE 1 $where AND parent= $current_user AND year= $year";
	//die();
	$result = mysqli_query($conn, $sql);
	$all_property = array();  //declare an array for saving property

	//showing property
	echo '<table class="data-table">
			<tr class="data-heading">';  //initialize table tag
	while ($property = mysqli_fetch_field($result)) {
		echo '<td>' . $property->name . '</td>';  //get field name for header
		$all_property[] = $property->name;  //save those to array
	}
	echo '</tr>'; //end tr tag

	//showing all data
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		foreach ($all_property as $item) {
			echo '<td>' . $row[$item] . '</td>'; //get items using property value
		}
		echo '</tr>';
	}
	echo "</table>";
}
  
		  ?>
<script type="text/javascript">
         $(document).ready(function () {
            $(document).on("click", ".MultiCheckBox", function () {
                var detail = $(this).next();
                detail.show();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader input", function (e) {
                e.stopPropagation();
                var hc = $(this).prop("checked");
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont input", function (e) {
                e.stopPropagation();
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);

                var multiCheckBoxDetail = $(this).closest(".MultiCheckBoxDetail");
                var multiCheckBoxDetailBody = $(this).closest(".MultiCheckBoxDetailBody");
                multiCheckBoxDetail.next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).mouseup(function (e) {
                var container = $(".MultiCheckBoxDetail");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });
        });

        var defaultMultiCheckBoxOption = { width: '220px', defaultText: 'Select Below', height: '200px' };

        jQuery.fn.extend({
            CreateMultiCheckBox: function (options) {

                var localOption = {};
                localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
                localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
                localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

                this.hide();
                this.attr("multiple", "multiple");
                var divSel = $("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
                divSel.css({ "width": localOption.width });

                var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><input type='checkbox' class='mulinput' value='-1982' /><div>Select All</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
                detail.css({ "width": parseInt(options.width) + 10, "max-height": localOption.height });
                var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

                this.find("option").each(function () {
                    var val = $(this).attr("value");
					var checked = $(this).attr("selected");
					var check = '';
					if(checked == 'selected'){
					var check = 'checked';
					}
                    if (val == undefined)
                        val = '';

                    multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' value='" + val + "' "+check+"></div><div>" + $(this).text() + "</div></div>");
                });

                multiCheckBoxDetailBody.css("max-height", (parseInt($(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
            },
            UpdateSelect: function () {
                var arr = [];

                this.prev().find(".mulinput:checked").each(function () {
                    arr.push($(this).val());
                });

                this.val(arr);
            },
        });
</script>
</div>
   
    </div>
   </body>
</html>