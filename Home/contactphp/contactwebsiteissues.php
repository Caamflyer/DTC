<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'teddyrich7@gmail.com';
$subject = 'Message - Website Issue from '.$field_name. ' with the email of ' .$field_email;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'contactthankyou.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		window.location = 'contacterror.html';
	</script>
<?php
}
?>