<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Management</title>

	<!-- Bootstrap -->
	<link href="css/indexstyle.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Employee</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Employee Management</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="active"><a href="">Back</a></li>

					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Employee Management</h2>
			<hr />

			
			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Select </option>
						<option value="list_of_emp">List of Employee </option>
						<option value="add_emp">Add Employee </option>
						<option value="del_emp">Delete Employee </option>
						<option value="up_emp">Update Employee </option>
					</select>
				</div>
			</form>
			<br />
			<!--
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Nik</th>
					<th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
					<th>No Telepon</th>
					<th>Jabatan</th>
					<th>Status</th>
                    <th>Tools</th>
				</tr>
			</table>
			</div> -->
		</div>
	</div>
	

</body>
</html>
