<?php require_once("connection.php");?>
<?php
			
		function correspondingName($id){
			$conn = connect_to_database();
			$checkName = "select * from signin where (id='$id')";
			$result = mysqli_query($conn,$checkName);
			$rowcount=mysqli_num_rows($result);
			if($rowcount == 0) return 0;
			while($row = mysqli_fetch_assoc($result)){
				if($id == $row['id'])
				{
					return $row['username'];
				}
				
			}
		}
		
		function EndSession(){
			session_destroy();
		}
		
		function checkId($id,$number){
			$conn = connect_to_database();
			echo $id.$number;
			$query = "insert into library (id,book_no) values ('$id','$number')";
			$result = mysqli_query($conn,$query);
			
			}
		
?>