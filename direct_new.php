<?php 	
	function redirect_new($new_location){
		header("Location: " . $new_location);
		exit;
	}
?>