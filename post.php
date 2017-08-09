<?php

	if ('POST' === $_SERVER['REQUEST_METHOD'])   {
		
		$to = "jonguiles@gmail.com";
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);
		
		$subject = "Contact Form";
		$headers = "From: $email";
		$messages = "Name: $name \\r\
	Email: $email \\r\
	Message: $message";
		$mailsent = mail($to, $subject, $messages, $headers);
		
	}

?>