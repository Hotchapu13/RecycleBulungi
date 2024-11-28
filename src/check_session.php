<?php
// check_session.php
session_start();
header('Content-Type: application/json');

$response = [
    'session_expired' => isset($_SESSION['session_expired']) && $_SESSION['session_expired']
];

echo json_encode($response);
?>