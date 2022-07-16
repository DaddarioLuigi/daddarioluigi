<?php
	echo "helo world";
	$to = 'l.daddario@studenti.uniba.it';
	$subject = 'Messaggio dal sito web';
	$message = 'hello';
	$headers = 'From: l.daddario@studenti.uniba.it' . "\r\n" .
	    'Reply-To: l.daddario@studenti.uniba.it' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
?>
