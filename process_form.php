<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Replace the email address with your own
    $to = "your_email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    // You can customize the email message as needed
    $email_body = "Full Name: $fullname\nEmail: $email\n\nMessage:\n$message";
    
    // Send the email
    mail($to, $subject, $email_body, $headers);
    
    // Optionally, you can redirect the user to a thank-you page
    header("Location: thank_you.html");
    exit;
}
?>
