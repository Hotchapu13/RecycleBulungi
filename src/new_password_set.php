<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Set New Password</title>
  <link rel="stylesheet" href="CSS/index_styles.css">
</head>
<body>
  <?php include "header.php"; ?>

  <div class="set-password-container">
    <h2>Set a New Password</h2>
    <form action="set_new_password.php" method="POST">
      <label for="new_password">New Password:</label>
      <input
        type="password"
        id="new_password"
        name="new_password"
        placeholder="Enter new password"
        required
      />
      <button type="submit">Reset Password</button>
    </form>
  </div>

  <?php include "footer.php"; ?>
</body>
</html>