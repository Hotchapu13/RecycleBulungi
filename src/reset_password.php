<?php
// reset_password.php
session_start();
include 'config.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $email = $_SESSION['email'];

    // Verify the code
    $stmt = $conn->prepare("SELECT id FROM password_resets WHERE email = ? AND code = ? AND expires_at > NOW()");
    $stmt->bind_param("si", $email, $code);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Redirect to set new password
        $_SESSION['verified'] = true;
        header("Location: set_new_password.php");
        exit();
    } else {
        echo "Invalid or expired verification code.";
    }
}
?>