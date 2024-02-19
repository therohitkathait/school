
<h1></h1>
<h1></h1>
<h1> Add Discount</h1>
<form action="#" method="post" style="padding-bottom: 100px;">
	<input type="text" name="name" value="Amit Malviya" placeholder="Discription" disabled/>

	<input type="number" name="amount" placeholder="Discount Amount" required/>

	<input type="hidden" name="sid" value="85" required/>

	<input type="hidden" name="dis" value="dis" required/>

	<input type="submit" name="submits">
</form>
<table>
	<tr>
		<th>No</th><th>Student Name</th><th>Old Fees</th><th>Action</th>
	</tr>
		<tr>
		<td>1</td><td>Amit Malviya</td><td>500</td><td><a href="delete_oldfees.php?stid=39"> <button type="button" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"><i class="fa fa-trash-o"></i></button></a></td>
	</tr>
	</table>
<h1></h1>