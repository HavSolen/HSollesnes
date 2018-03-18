<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'havard@grynbanken.no';
$subject = 'Contact Recieved '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. I will contact you soon.');
		window.location = '../Contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('CRITICAL ERROR, TRY AGAIN!!');
		window.location = '../Contact.html';
	</script>
<?php
}
?>