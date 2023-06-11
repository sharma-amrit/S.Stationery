<?php
// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


//database connection
include './connection.php';

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

// Execute the statement
if ($stmt->execute()) {
    $_SESSION["signup_success"] = "success";
        // Redirect back to the login page
        header("Location: ../views/pages/signup.php");
} else {
    $error = "Error occured during signup.";
        // Store error message in session variable
        $_SESSION["signup_error"] = $error;
        // Redirect back to the login page
        header("Location: ../views/pages/signup.php");
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
