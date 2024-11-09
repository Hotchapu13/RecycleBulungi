<?php
// set_new_password.php
session_start();
include 'config.php'; // Database connection

if (!isset($_SESSION['verified']) || !$_SESSION['verified']) {
    header("Location: SignIn.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $email = $_SESSION['email'];

    // Update the password in the database
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $new_password, $email);
    if ($stmt->execute()) {
        // Delete the password reset request
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        // Clear session variables
        session_unset();
        session_destroy();

        echo "Your password has been reset successfully.";
    } else {
        echo "Failed to reset password.";
    }
}
?>