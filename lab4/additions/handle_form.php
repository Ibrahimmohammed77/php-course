<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Simple form validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div style='max-width: 600px; margin: 20px auto; font-family: Arial, sans-serif;'>";
            echo "<h2>Form Submitted Successfully!</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Message:</strong> $message</p>";
            echo "</div>";
        } else {
            echo "<div style='max-width: 600px; margin: 20px auto; font-family: Arial, sans-serif; color: red;'>";
            echo "<h2>Invalid Email Address</h2>";
            echo "</div>";
        }
    } else {
        echo "<div style='max-width: 600px; margin: 20px auto; font-family: Arial, sans-serif; color: red;'>";
        echo "<h2>Please fill out all fields!</h2>";
        echo "</div>";
    }
} else {
    echo "<div style='max-width: 600px; margin: 20px auto; font-family: Arial, sans-serif; color: red;'>";
    echo "<h2>Invalid Request Method</h2>";
    echo "</div>";
}
?>
