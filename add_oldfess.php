
<h1></h1>
<h1></h1>
<h1> Add Old Fees</h1>
<form action="#" method="post" style="padding-bottom: 100px;">
	<input type="text" name="dis" value="Amit Malviya" placeholder="Discription" disabled/>

	<input type="number" name="amount" placeholder="Amount" required/>

	<input type="hidden" name="sid" value="85" required/>

	<input type="hidden" name="dis" value="old" required/>

	<input type="submit" name="submits">
</form>
<table>
	<tr>
		<th>No</th><th>Student Name</th><th>Old Fees</th><th>Action</th>
	</tr>
		<tr>
		<td>1</td><td>Amit Malviya</td><td>1000</td><td><a href="delete_oldfees.php?stid=40"> <button type="button" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"><i class="fa fa-trash-o"></i></button></a></td>
	</tr>
		<tr>
		<td>1</td><td>Amit Malviya</td><td>1</td><td><a href="delete_oldfees.php?stid=42"> <button type="button" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-info btn-lg"><i class="fa fa-trash-o"></i></button></a></td>
	</tr>
	</table>
<h1></h1>