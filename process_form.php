<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "tawqeerkhursheed7@gmail.com"; // Corrected email address
    $subject = "Feedback from $name";
    $body = "From: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Thank you for your feedback!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
