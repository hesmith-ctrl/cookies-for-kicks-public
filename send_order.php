<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $cookieType = htmlspecialchars($_POST['cookie_type']);

    $to = "henry.smith@student.hutchins.tas.edu.au"; // henry.smith@student.hutchins.tas.edu.au
    $subject = "New Cookie Order from $name";
    $message = "You have received a new cookie order.\n\n".
               "Name: $name\n".
               "Email: $email\n".
               "Cookie Type: $cookieType\n";

    $headers = "From: webmaster@example.com"; // Replace with a valid sender email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Order sent successfully!";
    } else {
        echo "Failed to send order.";
    }
}
?>
