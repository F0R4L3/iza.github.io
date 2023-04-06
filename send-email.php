<?php
// Replace with your email address
$to_email = "infinitydevx@example.com";

// Get the form fields
$email = $_POST['email'];
$message = $_POST['message'];

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";

// Compose the email message
$subject = "New suggestion from $email";
$email_message = "
<html>
<body>
<p><strong>Email:</strong> $email</p>
<p><strong>Message:</strong></p>
<p>$message</p>
</body>
</html>
";

// Send the email
mail($to_email, $subject, $email_message, $headers);

// Redirect to a thank you page
header('Location: thank-you.html');
?>
