<?php

if(empty($_POST['sub']) ) {
	$to      = 'dbqqbq@gmail.com';
	$subject = 'WebNet';
	$message = htmlspecialchars($_POST['email']) . ' - ' . $_SERVER['REMOTE_ADDR'];
	$headers = 'From: tender@webnet.kz' . "\r\n" .
		'Reply-To: tender@webnet.kz' . "\r\n" .
		'X-Mailer: PHP/';

	mail($to, $subject, $message, $headers);
	header('Location: https://webnet.kz');
}