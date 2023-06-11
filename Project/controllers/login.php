<?php
// connection
include './connection.php';

// Login functionality
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email and password from the login form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to check if the email and password exist in the database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // email and password are correct, set session variables
        $_SESSION["email"] = $email;
        $_SESSION["userid"] = $row["id"];
        $_SESSION["username"] =$username;

        // Redirect to the store page or any other authenticated page
        header("Location: ../views/pages/store.php");
        exit();
    } else {
        // Invalid username or password
        $error = "Invalid username or password.";
        // Store error message in session variable
        $_SESSION["login_error"] = $error;
        // Redirect back to the login page
        header("Location: ../views/pages/login.php");
        exit();
    }
}
?>
