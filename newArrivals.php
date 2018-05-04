<?php require_once("update.php");?>
<HTML>
<head>
<title>New Arrivals</title>
	<style>
	.btn{
		width:9em;
		height:3em;
		background-color:#FF940A;
		border-radius:5px;
		color:white;
		text-align: center;
		font-size:20px;
		font-weight:bold;
	}
	.container{
		
		width:85em;
		
		margin:5em 0 0 9em;
		
		
	}
	.img{
		width:13em;
		height:22em;
		
	}
	.content{
		
		width:40em;
		height:20em;
		margin:-21.5em 0 0 20em;
	}
	.read{
		position:relative;
		top:1em;
	}
	a{
		text-decoration:none;
	}
	.book{
		position:relative;
		top:1.5em;
		left:13em;
		display:none;
		margin-bottom:1.8em;
	}
	.content{
		position:relative;
		left:-2em;
		top:-1em;
	}
	.color{
		color:gray;
	}
	.size{
		letter-spacing:2px;
		fontsize:15px;
	}
	.header{
		width:85em;
		height:8em;
		background-color:#008286;
		color:white;
		position:relative;
		top:2em;
		left:9em;
	}
	.pos{
		position:relative;
		left:2em;
		top:0.7em;
		font-size:3em;
	}
	</style>
</head>
<body>

	<?php 
	$image_path="null";
	$title="null";
	$category="null";
	$author="null";
	$pdf_path="null";
	$description="null";
	$rows = getRows();
	?>

	<div class="header">
			<h1 class="pos">New Arrivals</h1>
	</div>
	
	
	<div class="container">
	
		<?php
				list($image_path,$title,$category,$author,$pdf_path,$description,$flag)  = getTable();
				$no = getNo($title);
				/*echo "image_path".$image_path;
				echo "title".$title;
				echo "category".$category;
				echo "author".$author;
				echo "pdf_path".$pdf_path;*/
				$visibility=setFlag($no);
				//echo $visibility;
			?>
			<?php 
					if($visibility==1){
						
			?>
					<style type="text/css">
						#apDiv1 {
						display:block;
					}
					</style>
			
			<?php
					}
				?>
			
			<?php 
					if($visibility==0){
						
			?>
					<style type="text/css">
						#apDiv1 {
						display:none;
					}
					</style>
			
			<?php
					}
				?>
				
			<div class="book" id="apDiv1">
				<img class="img" src="<?php echo $image_path; ?>">
	
				<div class="content">
				<h1 class="color size"><?php echo $title?></h1>
				<p class="color size">by <?php echo $author?></p>
				<p class="color size"><?php echo $description?></p>
				<a target="_blank" href='<?php echo $pdf_path;?>'><div class="btn"><p class="read">Read</p></div></a>
				
				</div>
			</div>
		<?php
				list($image_path,$title,$category,$author,$pdf_path,$description,$flag)  = getTable();
				$no = getNo($title);
				/*echo "image_path".$image_path;
				echo "title".$title;
				echo "category".$category;
				echo "author".$author;
				echo "pdf_path".$pdf_path;*/
				$visibility=setFlag($no);
				//echo $visibility;
			?>
			<?php 
					if($visibility==1){
						
			?>
					<style type="text/css">
						#apDiv2 {
						display:block;
					}
					</style>
			
			<?php
					}
				?>
				
			<?php 
					if($visibility==0){
						
			?>
					<style type="text/css">
						#apDiv2 {
						display:none;
					}
					</style>
			
			<?php
					}
				?>
				
			<div class="book" id="apDiv2">
				<img class="img" src="<?php echo $image_path; ?>">
	
				<div class="content">
				<h1 class="color size"><?php echo $title?></h1>
				<p class="color size">by <?php echo $author?></p>
				<p class="color size"><?php echo $description?></p>
				<a target="_blank" href='<?php echo $pdf_path;?>'><div class="btn"><p class="read">Read</p></div></a>
				</div>
			</div>
			<?php
				list($image_path,$title,$category,$author,$pdf_path,$description,$flag)  = getTable();
				$no = getNo($title);
				/*echo "image_path".$image_path;
				echo "title".$title;
				echo "category".$category;
				echo "author".$author;
				echo "pdf_path".$pdf_path;*/
				$visibility=setFlag($no);
				//echo $visibility;
			?>
			<?php 
					if($visibility==1){
						
			?>
					<style type="text/css">
						#apDiv3 {
						display:block;
					}
					</style>
			
			<?php
					}
				?>
			
			<?php 
					if($visibility==0){
						
			?>
					<style type="text/css">
						#apDiv3 {
						display:none;
					}
					</style>
			
			<?php
					}
				?>
				
			<div class="book" id="apDiv3">
				<img class="img" src="<?php echo $image_path; ?>">
	
				<div class="content">
				<h1 class="color size"><?php echo $title?></h1>
				<p class="color size">by <?php echo $author?></p>
				<p class="color size"><?php echo $description?></p>
				<a target="_blank" href='<?php echo $pdf_path;?>'><div class="btn"><p class="read">Read</p></div></a>
				
				</div>
			</div>
			<?php
				list($image_path,$title,$category,$author,$pdf_path,$description,$flag)  = getTable();
				$no = getNo($title);
				/*echo "image_path".$image_path;
				echo "title".$title;
				echo "category".$category;
				echo "author".$author;
				echo "pdf_path".$pdf_path;*/
				$visibility=setFlag($no);
				//echo $visibility;
			?>
			<?php 
					if($visibility==1){
						
			?>
					<style type="text/css">
						#apDiv4 {
						display:block;
					}
					</style>
			
			<?php
					}
				?>
			
			<?php 
					if($visibility==0){
						
			?>
					<style type="text/css">
						#apDiv4 {
						display:none;
					}
					</style>
			
			<?php
					}
				?>
				
			<div class="book" id="apDiv4">
				<img class="img" src="<?php echo $image_path; ?>">
	
				<div class="content">
				<h1 class="color size"><?php echo $title?></h1>
				<p class="color size">by <?php echo $author?></p>
				<p class="color size"><?php echo $description?></p>
				<a target="_blank" href='<?php echo $pdf_path;?>'><div class="btn"><p class="read">Read</p></div></a>
				
				</div>
			</div>
			<?php
				list($image_path,$title,$category,$author,$pdf_path,$description,$flag)  = getTable();
				$no = getNo($title);
				/*echo "image_path".$image_path;
				echo "title".$title;
				echo "category".$category;
				echo "author".$author;
				echo "pdf_path".$pdf_path;*/
				$visibility=setFlag($no);
				//echo $visibility;
			?>
			<?php 
					if($visibility==1){
						
			?>
					<style type="text/css">
						#apDiv5 {
						display:block;
					}
					</style>
			
			<?php
					}
				?>
			
			<?php 
					if($visibility==0){
						
			?>
					<style type="text/css">
						#apDiv5 {
						display:none;
					}
					</style>
			
			<?php
					}
				?>
				
			<div class="book" id="apDiv5">
				<img class="img" src="<?php echo $image_path; ?>">
	
				<div class="content">
				<h1 class="color size"><?php echo $title?></h1>
				<p class="color size">by <?php echo $author?></p>
				<p class="color size"><?php echo $description?></p>
				<a target="_blank" href='<?php echo $pdf_path;?>'><div class="btn"><p class="read">Read</p></div></a>
				
				</div>
			</div>
			<?php 
					if($visibility==1){
						
			?>
					<style type="text/css">
						#apDiv5 {
						display:block;
					}
					</style>
			
			<?php
					}
				?>
			
			<?php 
					if($visibility==0){
						
			?>
					<style type="text/css">
						#apDiv5 {
						display:none;
					}
					</style>
			
			<?php
					}
				?>
				
			<div class="book" id="apDiv5">
				<img class="img" src="<?php echo $image_path; ?>">
	
				<div class="content">
				<h1 class="color size"><?php echo $title?></h1>
				<p class="color size">by <?php echo $author?></p>
				<p class="color size"><?php echo $description?></p>
				<a target="_blank" href='<?php echo $pdf_path;?>'><div class="btn"><p class="read">Read</p></div></a>
				
				</div>
			</div>
			<?php 
					if($visibility==1){
						
			?>
					<style type="text/css">
						#apDiv6 {
						display:block;
					}
					</style>
			
			<?php
					}
				?>
			
			<?php 
					if($visibility==0){
						
			?>
					<style type="text/css">
						#apDiv6 {
						display:none;
					}
					</style>
			
			<?php
					}
				?>
				
			<div class="book" id="apDiv6">
				<img class="img" src="<?php echo $image_path; ?>">
	
				<div class="content">
				<h1 class="color size"><?php echo $title?></h1>
				<p class="color size">by <?php echo $author?></p>
				<p class="color size"><?php echo $description?></p>
				<a target="_blank" href='<?php echo $pdf_path;?>'><div class="btn"><p class="read">Read</p></div></a>
				
				</div>
			</div>
			
			
	</div>
</body>
</html>