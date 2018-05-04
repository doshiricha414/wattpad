<?php require_once("validation.php");?>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="styling.css">
<title>Wattpad-Stories You'll Love</title>
<style>
	.username{
		position:relative;
		top:15em;
	}
	.login{
		position:relative;
		top:-4em;
	}
	.member{
		position:relative;
		top:15em;
		left:1em;
	}
	.innertext{
		letter-spacing:1.2px;
		position:relative;
		top:-8em;
		left:-5em;
		font-size:20px;
		color:red;
	}
	.midcontent{color:white;
	font-weight:bold;
	font-size:2em;
	position:relative;
	top:1.5em;
	left:-1.5em;
	}
	.free{
		color:white;
		position:relative;
		top:4.5em;
		font-size:20px;
		
		font-weight:bold;
		left:15em;
	}
	.log{
		color:red;
	}
	#design{
		width:3em;
		height:2.1em;
		background:url("search.png");
		background-color:white;
		background-repeat:no-repeat;
		background-position: center right;
		position:relative;
		top:0.7em;
		left:-3.5em;
	}
	.foot{
		position:relative;
		top:10em;
		left:-15em;
	}
</style>
<script src="myScript.js"></script>


	<script>
		
	var images = [	"http://il2.picdn.net/shutterstock/videos/8275420/thumb/1.jpg",
					"http://sf.co.ua/14/04/wallpaper-1371269.jpg",
					"https://www.clipartsgram.com/image/1276231736-bitefightfantasydarkhorrorvampirewerewolfmon-1472202334.jpg"
					];
	var i = 0;
	setInterval(function() {
    document.getElementById("image-head").style.backgroundImage = "url(" + images[i] + ")";
      i = i + 1;
      if (i == images.length) {
      	i =  0;
      }
}, 3000);
</script>
</head>
<BODY onload="myFunction()">
	
	<div class="container">	
		<div class="uppercontainer image-head"  id="image-head">
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
					
					<form name="form" action="index.php" method="POST">
					<input type="text" name="searchbar" id="searchbar" class="searchbar" placeholder="Search Stories & People" >
					<input type="submit" value="" id="design">
					</form>
					
					<a href="Login.php"><span class="login">Log In</span></a>
			</div>
			
		<p class="midcontent">Welcome To Wattpad!!!  </p>
		<p class="free">Whatever you're into, it's all free on Wattpad: the world's largest community for readers and writers.</p>

		<div class="inputfields">
		
		<form name="signin_form" action="index.php" method="POST" onsubmit="return (validateEmail(document.signin_form.email) && validateName() && validatePassword())">
		<div class="username">
				<input class="user" type="text" name="user" placeholder="Username" onchange="validateName()">
				<input class="user" type="email" name="email" placeholder="Email" onchange="validateEmail(document.signin_form.email)">
				<input class="user" type="Password" name="Password" placeholder="Password" onchange="validatePassword()">
				<a href="Login.php"><span class="reading"><input style="background-color:#FF940A;border:none;color: white;font-weight:bold;padding:10px;letter-spacing:2px;border-radius:5px" class="user" type="submit" name="submit" value="Start Reading" ></span><a href="">
		</div>
		</form>
		
		</div>
		
		<?php
			
			$message = "";
			$message1 = "";
			if(isset($_POST['submit'])){
			$user = trim($_POST["user"]);
			$email = trim($_POST["email"]);
			$Password = trim($_POST["Password"]);
			//echo $user." ".$email." ".$Password;
			list($a,$b) = checkExisting($user,$email);
			if($a == 1){
				$message = "Email already registered enter a unique email";
			}
		
			if($b == 1){
				$message1 = "Username already exists enter a unique username";
			}
			if(($a==0) && ($b==0)){
				//echo "{$user}.{$email}.{$Password}}";
				$message = "Sign In Successful now please Login";
				adduser($user,$email,$Password);
				//echo "user added";
			}
			}
			
			?>
			
			<?php
				$cat="null";
				if(isset($_POST['searchbar'])){
					$val = $_POST['searchbar'];
				$cat = getCategory($val);
				//echo $cat;
				$url = "allbook#".$cat;
				echo ("<script>location.href='$url'</script>");
				}
			
			?>
		
		
		
		<div class="validate">
		<p class="member">Already a Wattpad member? <span class="log"><a href="Login.php">Log In</a></span><br/></p>
		
			<h4 class="innertext"><?php echo $message."<br>".$message1;?></h4>		
		</div>
	<p> </p>
	
	</div>
	<div class="lowercontainer">
	
		<div class="part1">
	
			<p class="content1">
			<img id="pic1" src="https://a.wattpad.com/img/homepages/value/devices@2x.png?v&#x3D;dd9e584" />
			<div class="check">
			<h3 class="text1">Read from anywhere on your <br/>phone</h3>
			<div class="subtext1">
			<p class="small-text">Wattpad has all the stories you need, and we make it easy to read—right on your phone. Whether you're online or offline, you can read seamlessly without worrying about downloading PDFs.</p>
			</div>
			</p>
			
			<p class="content2">
			<img id="pic2" src="https://a.wattpad.com/img/homepages/value/comments@2x.png?v&#x3D;a708986">
			<img id="sub-pic1" src="https://a.wattpad.com/img/homepages/value/comment_4@2x.png?v&#x3D;b6e37db">
			<img id="sub-pic2" src="https://a.wattpad.com/img/homepages/value/comment_1@2x.png?v&#x3D;d4589a7">
			<img id="sub-pic3" src="https://a.wattpad.com/img/homepages/value/comment_2@2x.png?v&#x3D;dcc6354">
			<img id="sub-pic4" src="https://a.wattpad.com/img/homepages/value/comment_3@2x.png?v&#x3D;316bef0	">
			</p>	
			</div>
			
			<div class="text2">
			<h1 class="sub-text2">Be part of the experience</h1>
			<p class="small-text">See how others reacted to that crazy twist. Wattpad's inline commenting lets you share thoughts and interact with the story while you are reading.</p>
			<img id="mac" src="https://a.wattpad.com/img/homepages/value/macbook@2x.png?v&#x3D;615444f">
			</div>
			
			<div class="text3">
			<h1 class="sub-text3">Try your hand at writing</h1>
			<p class="small-text">Whatever story you want to tell, there is a reader waiting for you on Wattpad. From science fiction to romance, your story could be the next huge hit.</p>
			<p class="foot">Copywrite @2017 Wattpad</p>
			</div>
			
			
	</div>
	
</BODY>

</HTML>