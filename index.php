<?php
if(!empty($userName)&& !empty($userEmail)&& !empty($userMessage)){
	$userName=$_post["userName"];
	$userEmail=$_post["userEmail"];
	$userMessage=$_post["userMessage"];
	$toEmail= "nermeensam22@gmail.com";

	$mailheaders="Name:" .$userName.
	"\r\n Email: " .$userEmail . 
	"\r\n Message: " .$userMessage ;

	if(mail($toEmail,$userName,$mailheaders)){
		$message="Your Message is Received Successfully.";
	}
}
?>
