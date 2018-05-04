<?php
	function connect_to_database(){
	$conn = mysqli_connect("localhost","username","password","schema");
		if(mysqli_connect_errno()){
			die("Database connection failed:".mysqli_connect_error()." (".mysqli_connect_errno." )");
		}
		else{
			return $conn;
		}
	}
	
?>