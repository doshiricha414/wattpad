
	function validateEmail(email_address){
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
			//var email_address = document.forms["signin_form"]["email"].value;
			if(email_address.value.match(mailformat)){
				return true;
			}
			else
			{
				alert("Invalid Email");
				return false;
			}
		}
		
	function validateName(){
			var user_name = document.forms["signin_form"]["user"].value;
			if(user_name.length < 6)
			{
				alert("UserName must be longer than 6 characters");
				return false;
			}
			else{
				return true;
			}
		}
	function validatePassword(){
			var pasformat= /^[A-Za-z]\w{7,14}$/;
			var pass = document.forms["signin_form"]["Password"].value;
			if (!pass.match(pasformat))
			{
				alert("Invalid Password");
				return false;
			}
			else{
				return true;
			}
		}