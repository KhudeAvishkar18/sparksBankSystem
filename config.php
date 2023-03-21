<?php

	// $conn = mysqli_connect('shareddb-x.hosting.stackcp.net','Avishkar','12345678@','sparksBank');
	$conn = mysqli_connect('localhost','root','','sparksbank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>