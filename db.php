<?php

	
	$connection = mysqli_connect("localhost", "root", "", "rkm");
		
	if ( $connection ){
		//echo "We are Connected with the DataBase";
	}
	else{
		die("Connection Failed " . mysqli_error($connection) );
	}

?>