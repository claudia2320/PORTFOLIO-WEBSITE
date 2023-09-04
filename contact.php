<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Replace this with your desired email address
    $to = "cm2320@ic.ac.uk";

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Sending the email
    if (mail($to, $subject, $message, $headers)) {
        // If the email is sent successfully, return a success response
        echo 'OK';
    } else {
        // If there was an error sending the email, return an error response
        http_response_code(500);
        echo 'Error sending email.';
    }
}
?>
