<?php
// session_mgt.php
// Include the configuration file
include 'config.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Function to check and update session timeout
function checkSessionTimeout() {
    // List of pages that should redirect to index.php on timeout
    $public_pages = ['index.php', 'about.php'];
    $current_page = basename($_SERVER['PHP_SELF']);

    if (isset($_SESSION['last_activity'])) {
        $elapsed_time = time() - $_SESSION['last_activity'];
        if ($elapsed_time >= SESSION_TIMEOUT) {
            // Session has expired
            session_unset();
            session_destroy();
            if (in_array($current_page, $public_pages)) {
                header('Location: index.php?session_expired=1');
            } else {
                header('Location: SignIn.php?session_expired=1');
            }
            exit();
        }
    }
    // Update last activity time
    $_SESSION['last_activity'] = time();
}

// Call the function to check session timeout
checkSessionTimeout();
?>