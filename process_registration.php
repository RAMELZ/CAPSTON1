<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Basic validation (you can add more complex validation as needed)
    if ($password !== $confirm_password) {
        echo "if it's correct any confirm password registration successful.";
    } else {
        // Store the user data or perform other actions (e.g., database insertion)
        // You should hash the password before storing it in a real application

        // For demonstration purposes, we'll just display the user's data
        echo "Registration successful!<br>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
    }
}
?>