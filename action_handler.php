<?php

$name = $_POST['Name'];
$mail = $_POST['Email'];
$comment = $_POST['comment'];

$to = "Davidchurch97@gmail.com";				#recipient
$re = "Website Feedback"; 					#subject
$msg = $comment;						#message

$headers  = "MIME-Version: 1.0\r\n";				#html hdr
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $mail \r\n";				#from
$headers .= "Cc: another@hotmail.com \r\n"; 			#cc

mail( $to, $re, $msg, $headers );				#send mail

?>

<!DOCTYPE html>
<!--Feedback-->
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Form Action</title>
</head>
<body>

<h1>Thanks for your comments</h1>
	<p>Message received from <?php echo($Name); ?>
	<p>Reply to <?php echo($Email); ?></p>
	<p><a href="index.html">Home</a></p>

</body>
</html>