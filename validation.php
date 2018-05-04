<?php
		require_once("connection.php");
		function checkExisting($user,$email){
		$conn = connect_to_database();
			$a = 0;
			$b = 0;
			$check_email = "select * from signin where (email='$email')";
			$res = mysqli_query($conn,$check_email);
			while($row = mysqli_fetch_assoc($res)){
				if($email == $row['email'])
				{
						$a = 1;
				}
				else
				{
					$a = 0;
				}
		}
		$check_username = "select * from signin where (username = '$user')";
		$res = mysqli_query($conn,$check_username);
		while($row = mysqli_fetch_assoc($res)){
				if($user == $row['username'])
				{
						//echo "Username already exists";
						//return 1;
						$b = 1;
				}
				else
				{
					//echo "New Email";
					//return 0;
					$b = 0;
				}
		}
		return array($a,$b);
	}
		function adduser($user,$email,$Password){
			$conn = connect_to_database();
			$query = "insert into signin (username,email,password) values('$user','$email','$Password')";
			$res = mysqli_query($conn,$query);
		}
		
		function getCategory($name){
			$conn = connect_to_database();
			$query = "select * from book where (title = '$name')";
			$res = mysqli_query($conn,$query);
			while($row = mysqli_fetch_assoc($res)){
				
				if($name == $row['title']){
					return $row['uni'];
				}
			}
			
		}
	
?>