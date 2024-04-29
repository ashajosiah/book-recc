<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (add your own validation logic here)

    // Dummy validation for demonstration purposes
    if ($username === "example@example.com" && $password === "password") {
        // Redirect user to dashboard or homepage
        header("Location: dashboard.php");
        exit();
    } else {
        // Display error message
        echo "Invalid username or password.";
    }
}
?>
