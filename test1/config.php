<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "data";
	
	//tao ket noi voi sql
	$conn = mysqli_connect($servername,$username,$password,$databasename);

	//kiem tra ket noi
	if(!$conn) {
		die("Connection failed" .mysqli_connect_error());
	}
	echo "Connection successfully";
?>
