<?php
session_start();

// HoneyPot PHP
if($_POST['honeypot'] != '')
{
	die("Spam");
}

if(isset($_POST['email'])) 
{
	
		$email_to = "rob@rmportfolio.info";
		$email_subject = "Portfolio Inquery";
		 
		
		$_SESSION['firstName'] = $_POST['firstName'];

		function died($error)  
		{ 
			// return to form pg with error		
			header('Location:http://localhost:8888/Port2013/?content=contact');
			exit();
		}
		 
		if(!isset($_POST['firstName']) ||
				!isset($_POST['lastName']) ||
				!isset($_POST['company']) ||
				!isset($_POST['email']))  
		{ 
			died('Sorry, but there appears to be a problem with the form you submitted.');
		}
		 
		$firstName = htmlspecialchars(strip_tags($_POST['firstName'])); // required
		$lastName =  htmlspecialchars(strip_tags($_POST['lastName'])); // required
		$company =  htmlspecialchars(strip_tags($_POST['company'])); // required
		$phone =  htmlspecialchars(strip_tags($_POST['phone'])); // not required
		$comments =  htmlspecialchars(strip_tags($_POST['comments'])); // not required
		$email =  htmlspecialchars(strip_tags($_POST['email'])); // required
		 
		$error_message = "";		
		$string_exp = "/^[A-Za-z .'-]+$/";
		if(!preg_match($string_exp,$firstName))  
	 	{  
			$error_message .= 'The First Name you entered does not appear to be valid.'."<br>";
		}
		
		if(!preg_match($string_exp,$lastName))  
		{ 
			$error_message .= 'The Last Name you entered does not appear to be valid.'."<br>";
		}
		
		$email_exp = '(\w[-._\w]*\w@\w[-._\w]*\w\.\w{3,3})';
		if(!preg_match($email_exp,$email))
		{
			$error_message .= 'The Email Address you entered does not appear to be valid.'."<br>";
		}
		/*
		$string_exp = "^((\.)?([a-zA-Z0-9_-]?)(\.)?([a-zA-Z0-9_-]?)(\.)?)+$";
		if(!preg_match($string_exp,$comments))
		{
			$error_message .= 'There seems to be invalid characters in the comments.'."<br>";
		}
		*/
		if(strlen($error_message) > 0)  
		{ 
			died($error_message);
		}
		
		$email_message = "Form details below.\n\n";
		
		function clean_string($string)  
		{ 
			$bad = array("content-type","bcc:","to:","cc:","href");
			return str_replace($bad,"",$string);
		}
		 
		$email_message .= "First Name: ".clean_string($firstName)."\n";
		$email_message .= "Last Name: ".clean_string($lastName)."\n";
		$email_message .= "Email: ".clean_string($email)."\n";
		$email_message .= "Telephone: ".clean_string($phone)."\n";
		$email_message .= "Comments: ".clean_string($comments)."\n";
		 
		 
		// create email headers
		$headers = 'From: '.$email;
		mail($email_to, $email_subject, $email_message, $headers);

		$serverDir = $_SERVER['HTTP_HOST']. '/';
		$nextPage = 'Port2013/?content=contact.php';		
		header('Location: http://'.$serverDir. $nextPage);
		exit();
}
?>