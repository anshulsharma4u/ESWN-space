<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_mobile = $_POST['phone'];
$field_message = $_POST['message'];


$mail_to = 'sa.anshul@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'E-mobile: '.$field_mobile"\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contacts.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to mail@eswn.in');
		window.location = 'contacts.html';
	</script>
<?php
}
?>