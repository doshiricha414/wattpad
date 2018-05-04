<?php require_once("connection.php");?>
<?php
			
		function checkPassword($email,$password){
			$conn = connect_to_database();
			$checkEmail = "select * from signin where (email='$email')";
			$result = mysqli_query($conn,$checkEmail);
			$rowcount=mysqli_num_rows($result);
			if($rowcount == 0) return 2;
			while($row = mysqli_fetch_assoc($result)){
				if($email == $row['email'])
				{
					if($password == $row['password']){
						
						return array(1,$row['id']);
					}
						//
					else
						return 0;
				}
				
		}
		}
		
?>