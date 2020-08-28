<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "emma.bambo@yahoo.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nsubject: " . $subject . "\nMessage: " . $message;
$msg = wordwrap($msg, 70);
mail($myemail, "New Form Submission", $msg);
mail($email, "Thank you", "Hello there, \n\nThank you for your form submission, I will be in contact with you soon. \n \nRegards \nOluwaseun Adebambo.");
header("Location: ../index.html");
//echo 'Thank you for your submission.  Please <a href="/index.html">Click here</a> to return to homepage.';
