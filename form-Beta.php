<?php 
$errors = '';
$myemail = 'pramod@compumatrice.com';//<-----Put Your email address here.

$Name = $_POST['Name']; 
$email = $_POST['email']; 
$Contact = $_POST['Contact']; 
$interestedin = $_POST['interestedin']; 
$message = $_POST['message']; 



	$to = $myemail; 
	$email_subject = "Compumatrice Contact US: $Name";
	$email_body = "You have received a new message from Compumatrice Website.".
	"Here are the details:\n First Name: $Name \n Email: $email \n Contact: $Contact  \n Interested in: $interestedin \n message: $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers = "Reply-To: $email";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	?>

    <script type="text/javascript">
				alert('Thank you contact form is submitted.');
				//document.getElementById('submit').innerHTML='Thank you form is submitted.';
   				 document.location = "index.html";
     </script>
<?php

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>