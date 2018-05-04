<HTML>
<head>
	<title>Writing tips</title>
	<link rel="stylesheet" type="text/css" href="style_writers.css">
	<style>
	.green{
		font-size:2.5em;
		margin:0.5em 0 1em 2.2em;
	}
	.strategies{
		font-size:28px;
		position:relative;
		left:-1em;
	}
	.one-tip{
		position:relative;
		top:-7em;
		font-size:25px;
	}
	.standout{
		position:relative;
		left:8em;
	}
	h3{
		color:white;
		margin:-1.5em 0 0 20em;
	}
	</style>
	<script>
	var arr=["https://www.wattpad.com/writers/assets/img/standout-story-01.png",
				"https://www.wattpad.com/writers/assets/img/standout-story-02.png",
				"https://www.wattpad.com/writers/assets/img/standout-story-03.png",
				"https://www.wattpad.com/writers/assets/img/standout-story-04.png",
				"https://www.wattpad.com/writers/assets/img/standout-story-05.png"	
	];
	var i = 0;
	setInterval(function() {
	  if(i==0)
	  document.getElementById("ror-txt").innerHTML = "Upload a nice cover image";
	  
	  else if(i==1)
	  document.getElementById("ror-txt").innerHTML = "Write a story description";
	  
	  else if(i==2)
	  document.getElementById("ror-txt").innerHTML = "Add descriptive tags";
	  
	  else if(i==3)
	  document.getElementById("ror-txt").innerHTML = "Add images and YouTube videos to each part";
	  
	  else if(i==4)
	  document.getElementById("ror-txt").innerHTML = "Turn your story into an audiobook";
	  
      document.getElementById("stdout").src= arr[i];
      i = i + 1;
      if (i == arr.length) {
      	i =  0;
      }
}, 3000);

	
	</script>
	</head>
	<body>
	
	<div class="section1">
		<div class="header">
			<a href="index.php">	<img src="http://localhost/Wattpad/mini.png"/></a><span class="text"><I>for</I> <strong> Writers</strong></span>
			<ul class="headerlist">
			<li><a href="write.php"> How to write</a></li>
			<li><a href="tips.php"> Writing tips</a></li>
			
			</ul>
		</div>
		<div class="how">
			<img src="https://www.advertisemint.com/wp-content/uploads/2016/12/4-Inspiring-Facebook-Advertising-Success-Stories2.jpg">		
		</div>
		<div class="top-tips">
			<h1 class="green">Top writing tips for Wattpad</h1>
			<span class="strategies"><p>These 5 strategies will help you to attract more readers and <br><span style="margin-left:7em"><strong>get your stories noticed.</strong></p></span>
		</div>
		
		<div class="update">
		<img src="https://www.wattpad.com/writers/assets/img/update-story-phone.png">
		<p class="one-tip"><span class="stories">1. Upload your <br/>stories regularly </span><br/>Post new, short chapters 1 to 3 times a week,<br/> and announce your posting schedule to your<br/> readers.</p>
		</div>
		
		<div class="standout">
		<p class="stories two-tip">2. Make your stories stand out</p>
			<p id="ror-txt">Upload a nice cover image</p>
			<div id="ror-img">
			<img id="stdout" src="https://www.wattpad.com/writers/assets/img/standout-story-05.png">
			</div>
		</div>
		
		<div class="follow">
		<img src="https://www.wattpad.com/writers/assets/img/phone-following.gif">
		
		
		</div>
		<p class="tip4"><span class="stories">3. Followup reading </span><br/>Follow Stories, <br/>and read.</p>
		
		
		<div class="share">
		<img src="https://www.wattpad.com/writers/assets/img/phone_sharestoriesonmedia.gif">
		</div>
		<p class="tip4 media"><span class="stories">4.Share stories<br/> on social media</span><br/>Post quote art and links to your stories on your favorite<br/> social networks.</p>
		<img id="social" src="http://localhost/Wattpad/media.jpg">
		
		<div class="tip5">
		<p id="challenge">5. Challenge your writing</p>
		<p id="challenge1">Enter a Wattpad writing contest to reach new audiences and get<br/> <span class="inner-challenge">inspiration from writing prompts.</span></p>
		<a href="Publish.php"><div class="button">
		<p id="contest">Start Writing</p>
		</div></a>
		</div>
		<div class="footer">
		<img src="https://www.wattpad.com/writers/assets/img/wp-footer-logo.png">
		<h3>Copywrite @2017 Wattpad</h3>
		</div>
	</body>
	
</html>