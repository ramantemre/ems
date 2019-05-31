<?php
  $con=mysqli_connect('localhost','root','root');
  mysqli_select_db($con,'employee_db');

  $q= "select * from employee";
  $result=mysqli_query($con,$q);

  $num=mysqli_num_rows($result);
 mysqli_close($con);
  
?>  
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Update Employee Record</title>
  	<link rel="stylesheet" href="./css/viewStyle.css" />
  </head>
  <body>
  <h1><center>Employee Management </center></h1>
  <form action="updation.php" method="post">
  <table id ="view_table" align="center">

  	<tr>
  	<th>ID</th>
  	<th>Name</th>
  	<th>Age</th>
  	<th>Phone.NO</th>
 	</tr>
 	<?php 
 		for($i=1;$i<=$num;$i++)
 		{
  			$row=mysqli_fetch_array($result);

 	 ?>
 	 <tr>
 	 	<td><?php echo $row['emp_id']; ?>
      <input type="hidden" name="emp_id<?php echo $i; ?>" value="<?php echo $row['emp_id']; ?>"/>
    </td>
 	 	<td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $row['name']; ?>"  /></td>
 	 	<td><input type="text" name="age<?php echo $i; ?>" value="<?php echo $row['age']; ?>" /></td>
 	 	<td><input type="text" name="Ph_no<?php echo $i; ?>" value="<?php echo $row['Ph_no']; ?>" /> </td>
 	 </tr>
 	 <?php
 	  	 	}
 	  ?>
  </table>
  <center><input type="submit"  value="Update" ></center>
  </form>
  </body>
  </html>