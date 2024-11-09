<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <link rel="stylesheet" type="text/css" href="CSS/form_styles.css" />
    <script src="JS/generalScript.js"></script>
    <title>Sign In-RecycleBulungi</title>
  </head>
  <body>
  <?php include "header.php"; ?>

    <div class="wrapper">
    <div class="content">
        <h1>Waste and Recycling solutions that fit your business needs</h1>
        <br>
      </div>
      <div class="form-container">
        <h2>Sign In</h2>
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
           <a href="SignUp.php">Forgot password</a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>
