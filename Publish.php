<?php require_once("connection.php");?>
<HTML>
<head>	<title>Publish</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<style>
	.image{
	width:15em;
	height:25em;
	background-color:#DDDDDD;
	position:relative;
	top:8em;
	left:10em;
	}
	#view{
	width:15em;
	height:25em;
	position:relative;
	top:-3.7em;
	}
	.details{
		width:50em;
		height:50em;
		border:1px solid #FF940A;
		float:right;
		position:relative;
		top:-17em;
		right:20em;
		border-radius:5px;
	}
	.Story{
		font-weight:bold;
		font-size:1.5em;
		margin-left:1em;
		}
	.fonts{
		color:#444444;
		font-weight:bold;
		font-size:1.5em;
		letter-spacing:2px;
	}
	.title{
		margin:0 0 0 1em;
	}
	.white{
		color:white;
		letter-spacing:2px;
	}

	.inputfield{
		width:55em;
		height:3em;
		border-radius:2px;
		padding:20px;
		border:1px solid #FF940A;
	}
	.large{
		width:55em;
		height:7em;
		border-radius:2px;
		padding:20px;
	}
	.border{
		border:1px solid #FF940A;
	}
	.position{
		position:relative;
		top:26em;
	}
	.postbook{
		margin:4em 0 0 8.2em;
		width:35em;
		height:3.5em;
		border-radius:5px;
		background-color:#FF940A;
		border:1px solid white;
	}
	</style>
	
	

</head>
<body>
	<div class="container">
		
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
			<div class="image">
			
			<form onsubmit="Publish.php" class="position" method="POST" enctype="multipart/form-data">
			<input type="file" name="uploadedimage">
			<input name="Upload Now" type="submit" value="Upload Image">
			</form>
		<?php
		$target_path="";
		if (!empty($_FILES["uploadedimage"]["name"])) {
		$file_name=$_FILES["uploadedimage"]["name"];
		$imagename="http://localhost/Wattpad/";
		$target_path = $imagename.$file_name;	
		echo "<img id='view' src='$target_path'>";
		}
		
		?>
		</div>
			
		<div class="details">
			<p class="Story fonts">Story Details</p>		<hr class="border	"/>
			<form method="POST" onsubmit="Next.php" action="Next.php" >
				<div class="Title fonts">
				<p>Title</p>
				<input name="title" type="text" placeholder="Untitled Story" class="inputfield">
				<p>Category</p>
				<input type="text" name="category" placeholder="Add Category" class="inputfield">
				<p>Author</p>
				<input type="text" name="author" placeholder="Add Author name" class="inputfield">
				<p>Description	</p>
				<input type="text" name="description" placeholder="Add Description" class="large border">
				<input type='hidden' name='img_path' value='<?php echo "$target_path";?>'/> 
				<input name="postbook" type="submit" value="Next" class="design postbook white">
			<form>		
			</div>
		</div>
</body>
</html>