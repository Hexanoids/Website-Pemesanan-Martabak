<?php
	$conn = mysqli_connect("localhost", "root", "", "db_martabak");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>