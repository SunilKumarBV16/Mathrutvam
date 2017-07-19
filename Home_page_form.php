<?php

	
	$varPHP = $_POST['emailid'];
$to = 'leads@healthheal.in';
	$subject = "News Letter Subscription";
	$message = "From:".$varPHP;
	$headers = 'From: subscribe@mathrutvam.in' . "\r\n";

 
	if(mail($to, $subject, $message, $headers))
	{
		
		echo "succesfully";
		
		
	}
	else
	{
			echo "failed";
	}
?>