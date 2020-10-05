<?php
	// $conn = new mysqli('localhost', 'root', '', 'apsystem');

	// if ($conn->connect_error) {
	//     die("Connection failed: " . $conn->connect_error);
	// }
	
	//online connection remotemysql.com
	$conn = new mysqli('remotemysql.com', 'wnwbP5TZTM', 'IuZWwEr9Co', 'wnwbP5TZTM');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>