<!DOCTYPE html>
<html>
<head>
	<title>InsertionForm</title>
</head>
<body>
	<h1>Employee Management</h1>
	<form action="insertion.php" method="post">
		<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center" cellspacing="2">
			<tr>
				<td colspan=2>
					<center><font size=5><b>Employee management</b></font></center>
				</td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th>Age</th>
				<td><input type="number" name="age" ></td>
			</tr>
			<tr>
				<th>Phone.No</th>
				<td><input type="tel" name="phone_no" maxlength="10"></td>
			<tr>
				<th></th>
			</tr>
			</tr>  
				<tr>
				<td><input type="reset"></td>
				<td><input type="submit" value="Insert"></td>
			</tr>
		</table>
		


	</form>

</body>
</html>