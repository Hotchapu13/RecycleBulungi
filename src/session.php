<?php
// Include session management
include 'session_mgt.php';

// List of pages that do not require login
$public_pages = ['index.php', 'about.php', 'SignIn.php', 'signUp.php'];

// Get the current script name
$current_page = basename($_SERVER['PHP_SELF']);

// If the current page is not in the list of public pages, check for user authentication
if (!in_array($current_page, $public_pages)) {
    // If the user is not logged in, redirect to the login page
    if (!isset($_SESSION['loggedin'])) {
        header('Location: SignIn.php');
        exit;
    }

    // Database connection and user data retrieval
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'recyclebulungi';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $stmt = $con->prepare('SELECT password, email FROM users WHERE id = ?');
    $stmt->bind_param('i', $_SESSION['id']);
    $stmt->execute();
    $stmt->bind_result($password, $email);
    $stmt->fetch();
    $stmt->close();
}
?>