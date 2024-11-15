<?php
// SignIn.php

// Check if the session expired parameter is set
$session_expired = isset($_GET['session_expired']) ? true : false;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <link rel="stylesheet" type="text/css" href="CSS/form_styles.css" />
    <script src="JS/generalScript.js"></script>
    <title>Sign In-RecycleBulungi</title>
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
  </head>
  <body>
      <?php include "header.php"; ?>
    <?php include "session_noti.php"; ?>

    <div class="wrapper">
    <div class="content">
        <h1>Waste and Recycling solutions that fit your business needs</h1>
        <br>
      </div>
      <div class="form-container">
        <h2>Sign In</h2>
        <?php if ($session_expired): ?>
          <div class="notification" id="sessionExpiredNotification">
            Your session has expired. Please sign in again.
          </div>
        <?php endif; ?>
        <form id="sign_in" action="authenticate.php" method="POST">
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Username"
            autofocus
            required
          />
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
            required
          />
          <input type="submit" value="Sign In" />
        </form>
        <!--make sure to redirect to email to account-->
        <div class="new_acc">Don't have an account? <a href="SignUp.php">sign up</a></div>
        <div class="forgot_password">
           <a href="forgot_password.php">Forgot password</a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>

    <script>
      // JavaScript to fade in and out the notification card
      document.addEventListener("DOMContentLoaded", function() {
        const notification = document.getElementById("sessionExpiredNotification");
        if (notification) {
          notification.style.display = "block";
          setTimeout(() => {
            notification.style.opacity = 1;
          }, 100); // Start fade-in after a short delay

          setTimeout(() => {
            notification.style.opacity = 0;
            setTimeout(() => {
              notification.style.display = "none";
            }, 500); // Ensure display is set to none after fade-out
          }, 4000); // Keep the notification visible for 4 seconds
        }
      });
      </script>
  </body>
</html>
