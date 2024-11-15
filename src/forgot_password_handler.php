<?php
// forgot_password_handler.php
session_start();
include 'config.php'; // Ensure the correct path to config.php
include 'email_config.php';

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    if (!$stmt) {
        echo "Preparation failed: (" . $conn->errno . ") " . $conn->error;
        exit();
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Generate a secure 6-digit verification code
        try {
            $verification_code = random_int(100000, 999999);
        } catch (Exception $e) {
            echo "Could not generate verification code.";
            exit();
        }

        // Store the code and email in the session
        $_SESSION['verification_code'] = $verification_code;
        $_SESSION['email'] = $email;

        // Store the code in the database with an expiration time
        $expires_at = date("Y-m-d H:i:s", strtotime('+15 minutes'));
        $stmt_insert = $conn->prepare("INSERT INTO password_resets (email, code, expires_at) VALUES (?, ?, ?)");
        if (!$stmt_insert) {
            echo "Preparation failed: (" . $conn->errno . ") " . $conn->error;
            exit();
        }
        $stmt_insert->bind_param("sis", $email, $verification_code, $expires_at);
        if (!$stmt_insert->execute()) {
            echo "Failed to store verification code.";
            exit();
        }

        // Send email with the verification code using PHPMailer
        $mail = new PHPMailer(true); // Passing `true` enables exceptions

        try {
            // Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output (for testing)
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'RecycleBulungi@gmail.com';                 // SMTP username
            $mail->Password   = 'hvha ofvy lxlg objb';                  // SMTP password or App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            // Recipients
            $mail->setFrom('RecycleBulungi@gmail.com', 'RecycleBulungi'); // Replace with your sender info
            $mail->addAddress($email);                                   // Add a recipient

            // Content
            $mail->isHTML(false);                                        // Set email format to plain text
            $mail->Subject = 'Your Password Reset Verification Code';
            $mail->Body    = "Hello,\n\nYou requested to reset your password. Please use the following verification code to proceed:\n\nVerification Code: $verification_code\n\nThis code will expire in 15 minutes.\n\nIf you did not request a password reset, please ignore this email.\n\nBest regards,\nRecycleBulungi Team";

            $mail->send();
            // Redirect to verify_code.php after successful email sending
            header("Location: verify_code.php");
            exit();
        } catch (Exception $e) {
            // Handle PHPMailer exceptions
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            exit();
        }
    } else {
        echo "Email address not found.";
    }

    // Close statements and connection
    $stmt->close();
    if (isset($stmt_insert)) {
        $stmt_insert->close();
    }
    $conn->close();
}
?>