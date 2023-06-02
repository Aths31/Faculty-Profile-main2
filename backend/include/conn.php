<?php
	// Database Connection 
	$conn = mysqli_connect("localhost", "root", "root","test");
	if ($conn->connect_error)  {
		die("Connection failed: " . $conn->connect_error);
	}
?>