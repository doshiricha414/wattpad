<?php require_once("connection.php");?>
<html>
<head>
	<title>Next Page</title>
	<link rel="stylesheet" type="text/css" href="styling.css">

	<style>
	.GettingPdf{
		width:30em;
		height:35em;
		margin:10em 0 0 35em;
		
		border-radius:5px;
		border:1px solid gray;
	}
	.sec1{
		margin:15em 0 0 2em;
	}
	
	.large{
		width:30em;
		height:15em;
		border-radius:2px;
		
		padding:20px;
		margin-bottom:4em;
		}
		.design{
		color:#444444;
		font-weight:bold;
		letter-spacing:2px;
		margin:-12em 0 1em 0;
		}
	.foot{
		position:relative;
		top:13em;
		left:8em;
	}
	</style>
</head>
<body>
	
	<?php 
	

	$Title = $_POST['title'];
	$Category = $_POST['category'];
	$Author = $_POST['author'];
	$Description = $_POST['description'];
	$img_path = $_POST['img_path'];
	/*echo $Title."Title";
	echo $Category."Cat";
	echo $Author."Title";
	echo $Description."Title";
	echo $Title."Title";
	*/
	?>
	
	<div class="header">
					<a href="index.php">	<div>	<img id="logo" src="https://a.wattpad.com/img/homepages/logo_Wattpad.png"/> </div></a>
					<ul class="headerlist">
						<li class="dropdown align-element"><a class="dropbtn" href="#">Discover</a>
						 <div class="dropdown-content">
							<table cellpadding="10">
							<tr>
								<td><a href="allbook.php#fav">All time favourite</a></td>
								<td><a href="allbook.php#gen">General Fiction</a></td>
								<td><a href="allbook.php#poe">Poetry</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#act">Action</a></td>
								<td><a href="allbook.php#his">Historical Fiction</a></td>
								<td><a href="allbook.php#ran">Random</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#Adventure">Adventure</a></td>
								<td><a href="allbook.php#hor">Horror</a></td>
								<td><a href="allbook.php#rom">Romance</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#ani">Anime</a></td>
								<td><a href="allbook.php#hum">Humor</a></td>
								<td><a href="allbook.php#sci">Science Fiction</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#bil">Billionaire</a></td>
								<td><a href="allbook.php#ima">Imagines</a></td>
								<td><a href="allbook.php#sho">Short Story</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#cla">Classics</a></td>
								<td><a href="allbook.php#mys">Mystery/Thriller</a></td>
								<td><a href="allbook.php#tee">Teen Fiction</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#spi">Spiritual</a></td>
								<td><a href="allbook.php#new">Newadult</a></td>
								<td><a href="allbook.php#urb">Urban</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#fan">Fanfiction</a></td>
								<td><a href="allbook.php#non">Nonfiction</a></td>
								<td><a href="allbook.php#vam">Vampire</a></td>
							</tr>
							<tr >
								<td><a href="allbook.php#fan">Fantasy</a></td>
								<td><a href="allbook.php#par">Paranormal</a></td>
								<td><a href="allbook.php#wer">Werewolf</a></td>
							</tr>
							</table>
							
						</div>
						</li>
						<li><a href="write.php" class="align-element">Create</a></li>
						
					</ul>
					
					<a href="Login.php"><span class="login">Log In</span></a>
			</div>
	
	
	<div class="GettingPdf">

		<div class="sec1">
		<p class="design">Add Outline Of Story	</p>
		<form onsubmit="Next.php" class="" method="POST" enctype="multipart/form-data">
				<textarea  type="text" name="description" cols="40" rows="5" maxlength="250"; placeholder="Add Description" class="large "></textarea ><br/>
				<input type="file" name="uploadedpdf" class="design1">
				<input type='hidden' name='title' value='<?php echo "$Title";?>'/> 
				<input type='hidden' name='category' value='<?php echo "$Category";?>'/> 
				<input type='hidden' name='author' value='<?php echo "$Author";?>'/> 
				<input type='hidden' name='description' value='<?php echo "$Description";?>'/> 
				<input type='hidden' name='img_path' value='<?php echo "$img_path";?>'/> 
				<input type="submit" value="publish" name="submit" >
			<!--	<input name="Upload pdf" type="submit" value="Upload Story pdf" class="design">	-->
				<br/>
		</form>
		</form>
				<?php	
					if(isset($_POST['submit'])){
					$Title = $_POST['title'];
					$Category = $_POST['category'];
					$Author = $_POST['author'];
					$Description = $_POST['description'];
					$img_path = $_POST['img_path'];
					//echo "img_path:".$img_path;
					}
					if (!empty($_FILES["uploadedpdf"]["name"])) {
					$file_name=$_FILES["uploadedpdf"]["name"];
					$imagename="http://localhost/Wattpad/";
					$loc  = $imagename.$file_name;
					
					if(isset($_POST['submit'])){
						echo "Book Published Successfully<br/>";
						pub_newbook($img_path,$Title,$Category,$Author,$loc,$Description,0);
					}

				}
				?>
				<?php 
					
					function pub_newbook($img_path,$Title,$Category,$Author,$loc,$Description,$zero){
					$conn = connect_to_database();	
					$query = "insert into publishbook (image_path,title,category,author,pdf_path,description,flag) values('$img_path','$Title','$Category','$Author','$loc','$Description','$zero')";
					$res = mysqli_query($conn,$query);
					
					}
				?>
				
	</div>
	<p class="foot">Copywrite @2017 Wattpad</p>
	</body>
</html>