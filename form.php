<?php

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@maasaicamp.com";
    $email_subject = "From contact form";
	$error_message = '';


    // validation
    if( 
        !isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['subject']) ||
		!isset($_POST['phone']) ||
		!isset($_POST['comments']))
		
		{
			
			echo "Fields are not filled properly";
			die();
    }
     
    $name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$subject = $_POST['subject']; // required
	$phone = $_POST['phone']; // required
	$message = $_POST['comments'];
	
     
$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>Your Details Are Below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
$email_message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$email_message .= "<tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";	


$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
// $headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers); 
header ("Location: index.html");
?>
