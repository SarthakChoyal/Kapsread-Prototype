<?php

if(isset($_POST['submit'])) {
    $to = "your-email@example.com"; // replace with your email address
    $subject = "New contact form submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " . $name . " <" . $email . ">";

    if(mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Error sending message. Please try again later.";
    }
}

?>
