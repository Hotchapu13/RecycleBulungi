<!-- notification.php -->
<?php
// Check if the session expired parameter is set
$session_expired = isset($_GET['session_expired']) ? true : false;
?>
<?php if ($session_expired): ?>
  <div class="notification" id="sessionExpiredNotification">
    Your session has expired. Please sign in again.
  </div>
<?php endif; ?>

<style>
  /* Notification Card Styles */
  .notification {
    display: none;
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0, 128, 0, 0.8); /* Green with transparency */
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }
</style>