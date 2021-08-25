<?php
	if(isset($_POST['submit'])){
        $email='info@deepdive.gg';	
		$minecraft=$_POST['minecraft'];

		$to='<insert email here>'; // Receiver Email ID, Replace with your email ID
		$subject='A new Realms invitation request';
		$message="Minecraft Username: ".$minecraft;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header('Location: index.html');
		}
		else{
			header('Location: requestfail.html');
		}
	}
?>
