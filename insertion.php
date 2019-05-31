<?php
$name=$_POST['name'];
$age=$_POST['age'];
$phone_no=$_POST['phone_no'];

  $con = mysqli_connect('localhost','root','rootus');
         if(! $con ) {
            die('<h3>Could not connect to Database</h3>'. mysqli_error());
         }
         echo '<h3>Database Connected successfully</h3>';


  $q="insert into employee(name,age,Ph_no) values('$name',$age,'$phone_no')";
  $status=mysqli_query($con,$q);
  mysqli_close($con);
  
?>
  <!DOCTYPE html>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Insertion</title>
  </head>
  <body>
  <h1>Employee Management</h1>
  <p>
  	<?php if($status==1)
  				echo "<b>Record Inserted</b>";
  			else
  				echo "<b>Insertion Failed</b>";
	?>
   </p>
   <p>Insert more records   <a href="insertionForm.php">click here</a>
  </body>
  </html>
