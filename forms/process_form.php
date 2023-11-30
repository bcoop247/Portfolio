<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "bcooper@brandoncooper.dev"; // Replace with your email address

    // Set the subject of the email
    $subject = "New Message from $name";

    // Build the email content
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $emailContent, $headers);

    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
