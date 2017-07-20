<?php

	if(isset($_POST['name'])){

		$to      = 'contact@budecon-ba.com';
		$subject = 'Contact';
		$message = 'Name: ' . $_POST['name'] . PHP_EOL . 
		'Email: ' . $_POST['email'] . PHP_EOL . 
		'Phone: ' . $_POST['phone'] . PHP_EOL . 
		'Contact reason: ' . $_POST['topic'] . PHP_EOL . 
		'Message: ' . $_POST['message'];


		mail($to, $subject, $message);

		echo "Thank you for contacting";
	}