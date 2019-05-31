<?php 
	$size=sizeof($_POST);
	$j=1;
	for ($i=1; $i<=$size;$i++,$j++) { 
		$index="b".$j;
		if (isset($_POST[$index])) 
		 	$b_id[$i]=$_POST[$index]; 
		else 	 
			$i--; 
	}



$con = mysqli_connect('localhost','root','root');
         if(! $con ) {
            die('<h3>Could not connect to Database</h3>' . mysqli_error());
         }
         echo '<h3>Database Connected successfully</h3>';

mysqli_select_db($con,'employee_db');
for ($k=1;$k<=$size;$k++) { 
  $q="delete from employee where emp_id=".$b_id[$k];
 $status=   mysqli_query($con,$q); 
}
mysqli_close($con);
?>
<!DOCTYPE html>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Deletion</title>
  </head>
  <body>
  <h1>Employee Management</h1>
  <p>
  	<?php if($status==1)
  				echo $size."<b>Record Deleted</b>";
  			 
	?>
   </p>
   <p>Go back to home page   <a href="home.php">click here</a>
  </body>
  </html>