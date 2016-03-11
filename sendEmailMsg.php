<?php

// set msg to send in email
$msg = urldecode($_GET['msg']);
$toEmail = urldecode($_GET['email']);

if (empty($msg) || is_null($msg))
{
 	echo "msg is nil, exit immediately";
	exit(0);
}
if (empty($toEmail) || is_null($toEmail))
{
	echo "email is nil, exit immediately";
	exit(0);
}

// send email
$to = 'haxpor@gmail.com';
$subject = 'ngrok - forwarding link - 2lit';
$headers = 'From: wasin@wasin.io' . "\r\n" .
			'Reply-To: wasin@wasin.io' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

echo "Sending email to " . $toEmail . "\n";
$result = mail($to, $subject, $msg, $headers);

// echo result
if ($result)
{
	echo "Successfully sent email!";
}
else
{
	echo "Failed sent email";
}

?>