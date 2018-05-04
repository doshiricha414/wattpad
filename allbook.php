<?php require_once("getname.php");?>
<?php require_once("validation.php");?>
<HTML>
<head>
<link rel="stylesheet" type="text/css" href="styling.css">
<title>Books</title>

<style>
	.logged{
	position:relative;
	left:8em;
	top:5px;
	font-size:20px;
	letter-spacing:1px;
	}
	.copy{
		position:relative;
		left:20em;
		font-size:1.5em;
		font-weight:bold;
	}
	#allBooks{
		width:80em;
		height:100%;
		margin:1em 0 0 8em;
	}
	.pos{
		position:relative;
		left:30em;
		top:-2em;
		letter-spacing:1px;
		font-size:20px;
		font-weight: bold;
	}
	.innerpos{
			margin: -1.9em 0 0 77em;	
	}
	.searchbar{
		display:none;
	}
	.row{
		width:85em;
		heigth:40em;
		position:relative;
		top:-1em;
		left:-1em;
		
	}
	.content{
		width:30em;
		height:17.2em;
		float:right;
		position:relative;
		right:1em;
		top:0.5em;
		line-height: 2em;
		}
	#Adventure{
		padding : 50px;
		width:84em;
		height:3em;
		position:relative;
		top:1em;
		background-color:#008286;
		color:White;
	}
	.searchbar{
		display:none;
	}
	.book1{
		width:42em;
		height:20em;
	}
	.book2{
		width:42em;
		height:20em;
		float:right;
		position:relative;
		top:-20em;
	}
	#adv,#fav,#gen,#poe,#act,#his,#ran,#hor,#rom,#ani,#hum,#sci,#bil,#ima,#sho,#cla,#mys,#tee,#spi,#new,#fan,#non,#urb,#vam,#fan,#par,#wer{
		font-size:2.5em;
		position:relative;
		top:-1em;
		color:White;
	}
	img{
		width:10em;
		height:18em;
	}
	h1{
		color:#444444;
		position:relative;}
	p{
		font-size:1.5em;
		color:#97806B;
	}
	.btn{
		width:5em;
		height:2em;
		border-radius:5px;
		background-color:#FF940A;
		position:relative;
		top:-3.5em;
		left:11em;
	}
	.plus{
		width:3em;
		height:2em;
		border-radius:5px;
		background-color:#FF940A;
		position:relative;
		top:-6.5em;
		left:17em;
	}
	.text{
		position:relative;
		top:-2em;
	}
	.readbtn{
		color:white;
		font-size:15px;
		text-align:center;
	}
	.section{
		width:92em;
		height:70em;
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
	
</style>


</head>
<BODY>
				<div class="header">
					<a href="index.php">	<div>	<img id="logo" src="https://a.wattpad.com/img/homepages/logo_Wattpad.png"/> </div></a>
					<ul class="headerlist">
						<li class="dropdown align-element"><a class="dropbtn" href="#">Discover</a>
						 <div class="dropdown-content">
							<table cellpadding="10">
							<tr>
								<td><a href="#fav">All time favourite</a></td>
								<td><a href="#gen">General Fiction</a></td>
								<td><a href="#poe">Poetry</a></td>
							</tr>
							<tr >
								<td><a href="#act">Action</a></td>
								<td><a href="#his">Historical Fiction</a></td>
								<td><a href="#ran">Random</a></td>
							</tr>
							<tr >
								<td><a href="#Adventure">Adventure</a></td>
								<td><a href="#hor">Horror</a></td>
								<td><a href="#rom">Romance</a></td>
							</tr>
							<tr >
								<td><a href="#ani">Anime</a></td>
								<td><a href="#hum">Humor</a></td>
								<td><a href="#sci">Science Fiction</a></td>
							</tr>
							<tr >
								<td><a href="#bil">Billionaire</a></td>
								<td><a href="#ima">Imagines</a></td>
								<td><a href="#sho">Short Story</a></td>
							</tr>
							<tr >
								<td><a href="#cla">Classics</a></td>
								<td><a href="#mys">Mystery/Thriller</a></td>
								<td><a href="#tee">Teen Fiction</a></td>
							</tr>
							<tr >
								<td><a href="#spi">Spiritual</a></td>
								<td><a href="#new">Newadult</a></td>
								<td><a href="#urb">Urban</a></td>
							</tr>
							<tr >
								<td><a href="#fan">Fanfiction</a></td>
								<td><a href="#non">Nonfiction</a></td>
								<td><a href="#vam">Vampire</a></td>
							</tr>
							<tr >
								<td><a href="#fan">Fantasy</a></td>
								<td><a href="#par">Paranormal</a></td>
								<td><a href="#wer">Werewolf</a></td>
							</tr>
							</table>
							
						</div>
						</li>
						<li><a href="write.php" class="align-element">Create</a></li>
						
					</ul>
					<form action="allbook.php" method="POST">			
					<input type="text" id="searchbar" class="searchbar" placeholder="Search Stories & People">
					
					</form>
				</div>
				<?php
				$cat="null";
				if(isset($_POST['searchbar'])){
					$val = $_POST['searchbar'];
					$cat = getCategory($val);
				
					$url = "http://localhost/Wattpad/allbook.php#".$cat;
					echo "<a href='$url'></a>";
				}
			?>

			<div id="allBooks">
			
			<div class="section">
			
			<div id="Adventure">
			<p id="adv">Adventure</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
						 
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
				 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
			<div class="section">
			
			<div id="Adventure">
			<p id="fav">All Time Favourite</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/88509657-144-k862559.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<a href="#"> <div class="btn"><p class="readbtn">Read</p></div> </a>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/92530970-144-k129382.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<a href="#"> <div class="btn"><p class="readbtn">Read</p></div> </a>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/56640879-144-k932900.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<a href="#"> <div class="btn"><p class="readbtn">Read</p></div> </a>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<a href="#"> <div class="btn"><p class="readbtn">Read</p></div> </a>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<a href="#"> <div class="btn"><p class="readbtn">Read</p></div> </a>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
			<div class="section">
			<div id="Adventure">
			<p id="gen">General Fiction</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/67915192-144-k529067.jpg">
					<div class="content">
					<h1>Not All Blondes Are Dumb</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/109478940-144-k555766.jpg">
					<div class="content">
					<h1>Forgetting Billions</h1>
				</a>
				<p>by Richard </p>
					<a href="#"> <div class="btn"><p class="readbtn">Read</p></div> </a>
					 
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/99514074-144-k180129.jpg">
					<div class="content">
					<h1>The True Alpha</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/89575001-144-k795707.jpg">
					<div class="content">
					<h1>The Reversed Rejection</h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/98463918-144-k683068.jpg">
					<div class="content">
					<h1>The Incidental Mum</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/44202492-144-k654516.jpg">
					<div class="content">
					<h1>The Forgotten</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="gen">Poetry</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

			<div class="section">
			<div id="Adventure">
			<p id="act">Action</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="his">Historical Fiction</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="ran">Random</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="hor">Horror</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="rom">Romance</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="ani">Anime</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="hum">Humor</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="sci">Science Fiction</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="bil">Billionaire</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>

				<div class="section">
			
			<div id="Adventure">
			<p id="ima">Imagines</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
	
				<div class="section">
			
			<div id="Adventure">
			<p id="sho">Short Story</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="cla">Classics</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="mys">Mystery/Thriller</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="tee">Teen Fiction</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
						
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="spi">Spiritual</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="new">New Adult</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="urb">Urban</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					 
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="fan">Fanfiction</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="non">Non-Fiction</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="vam">Vampire</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="fan">Fantasy</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="par">Paranormal</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
				<div class="section">
			
			<div id="Adventure">
			<p id="wer">Werewolf</p>
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/119449150-144-k939048.jpg">
					<div class="content">
					<h1>A Kind of Cinderella Story</h1>
				</a>
					<p>by C.L>Young
					 <div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">A masked Ball. Two hundred thirty five Ladies. Four men all posing as the Prince. One woman out to find freedom and happiness.As the King's eldest son comes...</p>
					</div>
					</div>
				
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/79112623-144-k805119.jpg">
					<div class="content">
					<h1>Suicide Games</h1>
				</a>
				<p>by Richard </p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">aking your life is the ultimate taboo in the Christian and Catholic religions. By doing this, you condemn your soul to the pits of hell. Where you will burn for eternit...</p>
					</div>
					</div>
			</div>
			
			<div class="row">
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/89990411-144-k433316.jpg">
					<div class="content">
					<h1>Finding Humanity</h1>
				</a>

					<p>by Nina Marks
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
				
					</p>
					<p class="text">It started in an elevator. For Emily, every day of the last two years has been a blur. She keeps her head down, taking her college courses online and only going out to...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/106911881-144-k694520.jpg">
					<div class="content">
					<h1>MananSS - An Ignored Love </h1>
				</a>
				<p>by Kirti Makhija
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
					
					</p>
					<p class="text">10/sep/2017- On No 1postion Winner Of The Mystical Awards by Highest votings Manik Malhotra A Mafia disaster of the Light Town Mumbai... a Ruling Guy who rules upon ever.</p>
					</div>
					</div>
				
			</div>
			
			<div class="row">
			
				<a href="#">
					<div class="book1">
					<img src="https://a.wattpad.com/cover/44318698-144-k411131.jpg">
					<div class="content">
					<h1>The Last She</h1>
				</a>
					<p>by H.J.Nelson
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
			
					</p>
					<p class="text">A plague has swept over the Earth, killing the majority of the population and every female. Except one...</p>
					</div>
					</div>
				<a href="#">
					<div class="book2">
					<img src="https://a.wattpad.com/cover/15546517-144-k677504.jpg">
					<div class="content">
					<h1>Infection</h1>
				</a>
					<p>by Peter</p>
					<div class="btn"><p class="readbtn"><a target="_blank" href="motivation.pdf"> Read </a></p></div>
				
					<p class="text">It starts with a simple itch, nothing more.<br/> Maybe a few random spasms or the occasional shudder but you'll think nothing of it. Then you'll get blood shot eyes... Not en...</p>
					</div>
					</div>				
			</div>
			</div>
			</div>
			
			<div class="copy" >Copywrite @2017 Wattpad</div>
			
</div>







<body>
</html>