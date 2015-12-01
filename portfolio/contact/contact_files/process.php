<?
// Wait a second to simulate a some latency
usleep(500000);

// edit email where contact form is sent
$email_send_to = 'cactusabg@gmail.com';
// edit your domain
$email_recived_from = 'portfolio.vladthecactus.me.uk';
// edit message for a successfully sent contact form
$success_msj = 'Your message has been sent. Thank you for your interest. I will contact you shortly.';
// edit error message
$error_msj = 'Oops, There has been an error. Please try again in a few minutes';

// Pull out data from contact form
	$fname = htmlspecialchars(trim($_POST['fname']));
	$email = htmlspecialchars(trim($_POST['email']));
	$message = htmlspecialchars(trim($_POST['message']));
$email_recived_from  = str_replace ('http://', '', $email_recived_from );
$email_recived_from  = str_replace ('www.', '', $email_recived_from );
	$mailsubject = 'Masage recived from'.$email_recived_from.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is  '.$fname.'

	First Name: '.$fname.'
	Email: '.$email.'

	Message: '.$message.'
	
	|---------END MESSAGE----------|'; 
mail($email_send_to, $subject, $body); 
echo $success_msj;
?>