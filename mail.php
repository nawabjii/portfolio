<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    
    // Send email
    $to = "ajazonmac@gmail.com";
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Error: Method not allowed.";
}
?>
