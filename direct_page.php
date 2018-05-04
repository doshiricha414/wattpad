<?php 
	function redirect_to($new_location){
		header("Location: " . $new_location);
		exit;
	}
	function redirect_new($new_location){
		header("Location: " . $new_location);
		exit;
	}
?>