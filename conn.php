<?php
	$conn = new mysqli('localhost', 'root', 'nosananolife120100', 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>