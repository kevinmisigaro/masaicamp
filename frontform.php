<?php

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@maasaicamp.com";
    $email_subject = "New Booking";
	$error_message = '';

  
    // validation
    if( 
        
        !isset($_POST['name']) ||
        !isset($_POST['accomodation']) ||
		!isset($_POST['quantity']) ||
		!isset($_POST['date']))
		
		{
			
			echo "Fields are not filled properly";
			die();
    }
     
    $name = $_POST['name']; // required
    $accomodation = $_POST['accomodation']; // required
    $quantity = $_POST['quantity']; // required
    $date = $_POST['date']; // required
	
     
$email_message = '<html>';
$email_message = '<body>';
$email_message = '<head>';
$email_message = '<title>View customer booking below</title>';
$email_message = '</head>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Name of the person who booked:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Type of accomodation:</strong> </td><td>" . strip_tags($_POST['accomodation']) . "</td></tr>";
$email_message .= "<tr><td><strong>Number of people coming :</strong> </td><td>" . strip_tags($_POST['quantity']) . "</td></tr>";
$email_message .= "<tr><td><strong>Date of arrival:</strong> </td><td>" . strip_tags($_POST['date']) . "</td></tr>";
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
