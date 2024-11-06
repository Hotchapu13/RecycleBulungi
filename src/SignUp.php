<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <link rel="stylesheet" type="text/css" href="CSS/form_styles.css" />
    <script src="JS/generalScript.js"></script>
    <title>Sign Up-RecycleBulungi</title>
  </head>
  <body>
  <?php include "header.php"; ?>
    <div class="wrapper">
      <div class="content">
        <h2>Waste and Recycling solutions that fit your business needs</h2>
      </div>
      <div class="form-container">
        <h2>Create an Account</h2>
        <form id="sign_up" action="/signup" method="POST">
          <input
            type="text"
            id="firstname"
            name="firstname"
            placeholder="First Name"
            autofocus
            required
          />
          <input
            type="text"
            id="lastname"
            name="lastname"
            placeholder="Last Name"
            required
          />
          <input
            type="tel"
            id="phone"
            name="phone"
            placeholder="Phone Number"
            required
          />
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            required
          />
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
            required
          />
          <input
            type="confirmPassword"
            id="confirm-password"
            name="confirm-password"
            placeholder="Confirm Password"
            required
          />
          <input type="submit" value="Create Account" />
        </form>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>
