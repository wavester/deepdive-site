<?php
	if(isset($_POST['submit'])){
        $email='info@deepdive.gg';	
		$discord=$_POST['discord'];
		$movie=$_POST['movie'];

		$to='<insert email here>'; // Receiver Email ID, Replace with your email ID
		$subject='A new movie / tv show submission';
		$message="Discord: ".$discord."\n"."Movie / TV Show: ".$movie;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header('Location: submitted_movie.html');
		}
		else{
			header('Location: requestfail.html');
		}
	}
?>
