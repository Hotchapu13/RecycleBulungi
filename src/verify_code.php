<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verify Code</title>
  <link rel="stylesheet" href="CSS/form_styles.css">
</head>
<body>
      <?php include "header.php"; ?>
    <?php include "session_noti.php"; ?>

  <div class="verify-code-container">
    <h2>Enter Verification Code</h2>
    <form action="reset_password.php" method="POST">
      <label for="code">Verification Code:</label>
      <input
        type="text"
        id="code"
        name="code"
        placeholder="Enter the code"
        required
      />
      <button type="submit">Verify</button>
    </form>
  </div>

  <?php include "footer.php"; ?>
</body>
</html>