
<?php

	$name = $_POST['name'];
	
	$number = $_POST['number'];
	
	$email = $_POST['email'];

	$to = 'leads@healthheal.in';
	$subject = "New Enquiry/Lead for Mathrutvam";
	$message = "Name:".$name."\nPhone Number:".$number." \nEmail: ".$email;
	$headers = 'From: lead@mathrutvam.in' . "\r\n";

 
	if(mail($to, $subject, $message, $headers))
	{
		
		echo "success";
		
	}
	else
	{
		echo "failed";
	}


	


?>


