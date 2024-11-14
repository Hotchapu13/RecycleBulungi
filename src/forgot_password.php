<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="CSS/form_styles.css">
</head>
<body>
  <?php include "header.php"; ?>
  <div class="wrapper">
  <div class="form-container">
    <h2>Reset Your Password</h2>
    <form action="forgot_password_handler.php" method="POST">
      <label for="email">Email Address:</label>
      <input
        type="email"
        id="email"
        name="email"
        placeholder="Enter your email"
        required
      />
      <button type="submit">Send Verification Code</button>
    </form>
  </div>
  <div>
  <?php include "footer.php"; ?>
</body>
</html>