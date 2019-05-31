 <?php 
 	$size=sizeof($_POST);
 	$records=$size/4;

 	for ($i=1; $i <=$records ; $i++) 
 	{ 
 		$index1="emp_id".$i;
 		$emp_id[$i]=$_POST[$index1];
 		$index2="name".$i;
 		$name[$i]=$_POST[$index2];
 		$index3="age".$i;
 		$age[$i]=$_POST[$index3];
 		$index4="Ph_no".$i;
 		$Ph_no[$i]=$_POST[$index4];

 	}

 	$con = mysqli_connect('localhost','root','root');
         if(! $con ) {
            die('<h3>Could not connect to Database</h3>' . mysqli_error());
         }
         echo '<h3>Database Connected successfully</h3>';

  mysqli_select_db($con,'employee_db');


 	for ($i=1; $i <=$records ; $i++) { 
 	$q="update employee SET 
 	name='$name[$i]',age=$age[$i],Ph_no='$Ph_no[$i]' 
 	where emp_id=$emp_id[$i]";
 	 $status=mysqli_query($con,$q);

 }
 mysqli_close($con); 
  ?>

  <!DOCTYPE html>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Updation</title>
  </head>
  <body>
  <h1>Employee Management</h1>
  <p>
  	<?php if($status==1)
  				echo "<b>Record updated</b>";	 
	?>
   </p>
   <p>Go back to home page   <a href="home.php">click here</a>
  </body>
  </html>