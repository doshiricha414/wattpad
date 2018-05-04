<?php 		require_once("connection.php");
				
			function getTable(){
				$conn = connect_to_database();
				$query = "select * from publishbook where flag=0";
				$res = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($res)){
				if($row['flag']==0)
				{
						//echo $row['image_path'].$row['title'].$row['category'].$row['author'].$row['pdf_path'].$row['description'];
						//$query1 = "update publishbook set flag=1 where $row['no']=(select no from publisher where flag=0)";
						return array($row['image_path'],$row['title'],$row['category'],$row['author'],$row['pdf_path'],$row['description'],$row['flag']);
						//return array($row['image_path'],$row['image_path']);
						
				}
			
				}
			}
			function getRows(){
				$conn = connect_to_database();
				$query = "select * from publishbook where flag=0";
				$res = mysqli_query($conn,$query);
				$rowcount=mysqli_num_rows($res);
				return $rowcount;
			}
			
			function getNo($title){
				$conn = connect_to_database();
				$query = "select * from publishbook where title='$title'";
				$res = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($res)){
					if($row['title']==$title)
						return $row['no'];
					
				}
			}
			
			function setFlag($no){
				$conn = connect_to_database();
				$query = "update publishbook set flag=1 where no='$no'";
				$res = mysqli_query($conn,$query);
				$query1 = "select * from publishbook where no='$no'";
				$result = mysqli_query($conn,$query1);
				while($row = mysqli_fetch_assoc($result)){
					
					if($row['flag']==1)
						return 1;
					else
						return 0;
				}
				
				
			}
?>