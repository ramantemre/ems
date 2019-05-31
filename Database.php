<?php 
		$con = mysqli_connect(localhost,'root','rootus');
	if(! $con ) {

            die('<h3>Could not connect to Database</h3>'. mysqli_error());
         }


         echo '<h3>Database Connected successfully</h3>';


 ?>