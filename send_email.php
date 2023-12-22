<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "bwlwebsitedeveloper@gmail.com"; // Change this to the recipient's email address

    $sender_email = $_POST['sender_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set headers
    $headers = "From: $sender_email \r\n";
    $headers .= "Reply-To: $sender_email \r\n";
    $headers .= "Content-type: text/html\r\n";

    // Send email
    if (mail($recipient, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
