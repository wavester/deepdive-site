<?php
	if(isset($_POST['submit'])){
        $email='info@deepdive.gg';	
		$discord=$_POST['discord'];
		$motivation=$_POST['motivation'];

		$to='<insert email here>'; // Receiver Email ID, Replace with your email ID
		$subject='A new Staff application';
		$message="Discord: ".$discord."\n"."The reason they wanna become staff: ".$motivation;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header('Location: submitted_app.html');
		}
		else{
			header('Location: requestfail.html');
		}
	}
?>
