<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <link rel="stylesheet" type="text/css" href="CSS/form_styles.css" />
    <script src="JS/generalScript.js"></script>
    <title>Sign Up-RecycleBulungi</title>
    <style>
    .popup {
      visibility: hidden;
      min-width: 250px;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 17px;
      transform: translateX(-50%);
    }
    .popup.show {
      visibility: visible;
      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }
    @-webkit-keyframes fadein {
      from {bottom: 0; opacity: 0;} 
      to {bottom: 30px; opacity: 1;}
    }
    @keyframes fadein {
      from {bottom: 0; opacity: 0;}
      to {bottom: 30px; opacity: 1;}
    }
    @-webkit-keyframes fadeout {
      from {bottom: 30px; opacity: 1;} 
      to {bottom: 0; opacity: 0;}
    }
    @keyframes fadeout {
      from {bottom: 30px; opacity: 1;}
      to {bottom: 0; opacity: 0;}
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
        <h2>Create an Account</h2>
        <form id="sign_up" action="register.php" method="POST">
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
            type="text"
            id="username"
            name="username"
            placeholder="UserName"
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

    <div id="popup" class="popup">Account created successfully!</div>

  <script>
    window.onload = function() {
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.has('success')) {
        const popup = document.getElementById('popup');
        popup.classList.add('show');
        setTimeout(function() {
          popup.classList.remove('show');
        }, 3000);
      }
    };
  </script>
  </body>
</html>
