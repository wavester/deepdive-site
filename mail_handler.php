<?php
	if(isset($_POST['submit'])){
        $email='info@deepdive.gg'; // Sender email	
		$discord=$_POST['discord'];
		$album=$_POST['album'];

		$to='<insert email here>'; // Receiver Email ID, Replace with your email ID
		$subject='A new Album Exchange submission';
		$message="Discord: ".$discord."\n"."Album link: ".$album;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header('Location: submitted.html');
		}
		else{
			header('Location: requestfail.html');
		}
	}
?>
