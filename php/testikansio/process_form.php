<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Server-side validation (additional validation can be added here)
    if (empty($name) || empty($email)) {
        // Handle validation error
        echo "Please fill out all fields.";
    } else {
        // Process the form data (e.g., save to database, send email, etc.)
        echo "Form submitted successfully!<br>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
}
?>