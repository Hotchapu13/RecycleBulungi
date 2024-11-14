<?php
// session.php
session_start();

// Include the configuration file
include 'config.php';

// Function to check and update session timeout
function checkSessionTimeout() {
    if (isset($_SESSION['last_activity'])) {
        $elapsed_time = time() - $_SESSION['last_activity'];
        if ($elapsed_time >= SESSION_TIMEOUT) {
            // Session has expired
            session_unset();
            session_destroy();
            header('Location: SignIn.php?session_expired=1');
            exit();
        }
    }
    // Update last activity time
    $_SESSION['last_activity'] = time();
}

// Call the function to check session timeout
checkSessionTimeout();
?>