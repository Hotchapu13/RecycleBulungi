<?php
session_start();
session_unset();
session_destroy();

// Redirect to index.php after logout
header('Location: index.php');
exit();
?>