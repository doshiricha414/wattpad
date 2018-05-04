<?php include("direct_page.php");?>
<?php $url = "https://i.ytimg.com/vi/QBtcuBzHmCQ/maxresdefault.jpg";?>
<HTML>
<head>
<title>Login-Wattpad</title>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<style type="text/css">
	body
	{
	background-image:url('<?php echo $url ?>');
	background-repeat:no-repeat;	
	background-size: cover;
	}
	.login-options{display:none;margin-bottom:2em;}
	.resize{
		position:relative;
		top:3em;
		}
		.pos{
			margin-top:15px;
		}
		
	.result{
		margin-top:4em;
	}
	</style>
<script src="myScript.js"></script>	
</head>
<body>
<img id="wattpad" src="https://a.wattpad.com/img/homepages/logo_Wattpad.png">
	<div class="iphone">
		<img src="https://a.wattpad.com/img/homepages/phone.png"/>
	</div>
	
	<a href="index.php">	<button type="button" class="btn btn-outline-secondary al-signup">Sign Up</button>	</a>
	<div id="LogIn">
		<h1 class="text-color">Log in to Wattpad</h1>
		
		<div class="login-options">
			<a href="#">	<div class="facebook">
			<img class="fb" src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png">
			<p>Continue</p>
			</div>		</a>
			<a href="#">   <div class="google">
			<img class="gmail" src="https://a.wattpad.com/img/shared/google_plus_color.png?v=5bddd83">
			<p>Continue</p>
			</div>  </a>
		</div>
		<div class="form-group login resize">
			<form name="signin_form" action="Login.php" method="POST" onsubmit="return (validateEmail(document.signin_form.email) && validatePassword())">
			<label for="username"></label>
			<input type="text" name="email" class="form-control" id="username" placeholder="Email">
			<label for="Password"></label>
			<input type="Password" name="Password" class="form-control " id="Password"  placeholder="Password">
			
			
			<div class="alert alert-danger image pos" role="alert">
				 Please make sure all fields are filled in.
			</div>
			<div class="sub_form">
			<input type="submit" value="Log In" name="submit"
			<div class="button">
			<h4 id="txt-login"></h4>
			</div>
			</div>
			</form>
			<?php
				require_once("authenticate_user.php");
				$message="";
				if(isset($_POST['submit']))
				{
					$email = trim($_POST["email"]);
					$password = trim($_POST["Password"]);
					list($a,$id) = checkPassword($email,$password);
					if($a==1){
						session_start();
						$message =  "Login Successful";
						$_SESSION['id'] = $id;
						redirect_to(User);
						
					}
					else if($a==0)
						$message = "Password Incorrect";
					else
						$message = "Password Incorrect";
				}
				
			?>
			<div class="result"><?php echo $message."<br/>"?></div>
			</div>
	</div>
		<div class="signup"> <div class="text"><p>Don't have an account?  <strong> <a href="index.php">Sign up</a></strong> </p></div>  </div>
		
</body>
</html>