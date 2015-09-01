<?php

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the form fields and remove whitespace.
	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r","\n"),array(" "," "),$name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_PHONE_INT);
	$subject = strip_tags(trim($_POST["subject"]));
	$subject = str_replace(array("\r","\n"),array(" "," "),$subject);
	$message = trim($_POST["message"]);

	// Check that data was sent to the mailer.
	if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)
		OR !filter_var($phone, FILTER_VALIDATE_PHONE_INT)) {
		// Set a 400 (bad request) response code and exit.
		http_response_code(400);
		echo "Sorry. There was a problem with your submission. Please complete the form and try again.";
		exit;
	}

	// Set the recipient email address.
	// BELOW: Make correction to update this to your desired email address.
	$recipient = "marie@jtdesignsolutions.com";

	// Set the email subject.
	$subject = "New about... $subject";

	// Build the email content.
	$email_content = "Name: $name\n";
	$email_content .= "Email: $email\n\n";
	$email_content .= "Phone: $phone\n\n";
	$email_content .= "Message:\n$message\n";

	// Build the email headers.
	$email_headers = "From: $name <$email>";

	// Send the email.
	if (mail($recipient, $subject, $email_content, $email_headers)) {
		// Set a 200 (okay) response code.
		http_response_code(200);
		echo "Woo-hoo! Your message has been sent.";
	} else {
		// Set a 500 (internal server error) response code.
		http_response_code(500);
		echo "Sorry. Something went wrong. We can not send your message at this time.";
	}

} else {
	// Not a POST request, set a 403 (forbidden) response code.
	http_response_code(403);
	echo "There was a problem with your submission, please try again.";
}

?>