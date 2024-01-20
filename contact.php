<?php
$toEmail = "sivachi.ec@gmail.com";
//$toEmail = "sathiya.radical002@gmail.com";
$userName = $_POST['Name'];
$userEmail = $_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['Message'];
$subject="Contact form from Website";

$mailHeaders = "From: " . $userName . "<". $userEmail .">\r\n";
$message = "Hello!

Your contact form has been submitted by:

Name: $userName
Email: $userEmail 
Subject:$subject
Message: $message 

";
if(mail($toEmail, $subject, $message, $mailHeaders)) {
	echo ( " 
		<script>
          window.alert('Message Sent');
          window.location.href='contact.html';
        </script>
        ");

} else{
	echo ("<script>
          window.alert('Could not send the message');
          window.location.href='contact.html';
          </script>");
}
exit();
?>