<?php
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "DesaParhitean");

		
	if(!$conn){
		die("Masalah Pada Database");
	}
	$db_use = mysqli_select_db($conn, "DesaParhitean") or die("Select Database Problem !!");
?>
