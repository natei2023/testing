<?php 
	
	if (!empty($_POST['submit'])) {

		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$toEmail = 'tamunodestiny497@gmail.com';

		$mailHeaders = "Name:" . $fullname . "\r\n Email:" . $email . "\r\n Phone Number:" . $phone . "\r\n Subject:" . $subject . "\r\n Message:" . $message . "\r\n"; 
		if(mail($toEmail, $fullname, $mailHeaders)){
			$message = "Your Information is Received Successfully.";
		} else{
			$message = "There was an error send your message.";
		}
	}
?>