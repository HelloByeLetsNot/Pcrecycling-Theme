<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = 'youremem@gmail.com';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
} else {
    echo '<p>Something went wrong. Please try again later.</p>';
}
?>
