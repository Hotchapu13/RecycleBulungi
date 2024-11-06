<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      .card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px; /* Increased width */
        margin: 0 auto; /* Center the card */
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center; /* Center content horizontally */
      }

      .card-header {
        text-align: center;
        margin-bottom: 1rem;
        width: 100%;
      }

      .card-content {
        display: flex;
        flex-direction: column;
        align-items: center; /* Center content horizontally */
        width: 100%;
      }

      .form {
        display: none;
        width: 100%;
      }

      .form.active {
        display: block;
      }

      .form-group {
        margin-bottom: 1rem;
        width: 100%;
        display: flex;
        justify-content: center; /* Center content horizontally */
      }

      .input-wrapper {
        position: relative;
        width: 100%;
      }

      .input-icon {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        color: #888;
      }

      input[type="email"],
      input[type="password"] {
        width: calc(
          100% - 40px
        ); /* Adjusted width to fit within the container */
        padding: 10px 10px 10px 40px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; /* Ensure padding and border are included in the width */
      }

      button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        cursor: pointer;
      }

      button:hover {
        background-color: #0056b3;
      }

      .card-footer {
        text-align: center;
        margin-top: 1rem;
        width: 100%;
      }

      .link {
        color: #007bff;
        cursor: pointer;
        text-decoration: none;
      }

      .link:hover {
        text-decoration: underline;
      }
    </style>
    <script>
      function showForm(formId) {
        // Hide all forms
        document.querySelectorAll(".form").forEach((form) => {
          form.classList.remove("active");
        });

        // Show selected form
        document.getElementById(formId).classList.add("active");

        // Update header text
        const headerText = {
          signInForm: "Sign In",
          createAccountForm: "Create Account",
          forgotPasswordForm: "Reset Password",
        };
        document.querySelector(".card-header h2").textContent =
          headerText[formId];
      }
    </script>
    <script src="JS/generalScript.js"></script>
  </head>
  <body>
    <div class="side-menu" id="sideMenu">
      <div class="profile">
        <img
          src="images/user-icon.svg"
          alt="User Profile"
          class="profile-icon"
        />
        <p class="username">Username</p>
      </div>
      <ul class="menu-items">
        <li><a href="edit_profile.php">Edit Profile</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="card">
      <div class="card-header">
        <h2>Sign In</h2>
      </div>

      <div class="card-content">
        <!-- Sign In Form -->
        <form id="signInForm" class="form active">
          <div class="form-group">
            <div class="input-wrapper">
              <svg
                class="input-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
              <input type="email" placeholder="Email" required />
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <svg
                class="input-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                />
              </svg>
              <input type="password" placeholder="Password" required />
            </div>
          </div>
          <button type="submit">Sign In</button>
        </form>

        <!-- Create Account Form -->
        <form id="createAccountForm" class="form">
          <div class="form-group">
            <div class="input-wrapper">
              <svg
                class="input-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
              <input type="email" placeholder="Email" required />
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <svg
                class="input-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                />
              </svg>
              <input type="password" placeholder="Password" required />
            </div>
          </div>
          <div class="form-group">
            <div class="input-wrapper">
              <svg
                class="input-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                />
              </svg>
              <input type="password" placeholder="Confirm Password" required />
            </div>
          </div>
          <button type="submit">Create Account</button>
        </form>

        <!-- Forgot Password Form -->
        <form id="forgotPasswordForm" class="form">
          <div class="form-group">
            <div class="input-wrapper">
              <svg
                class="input-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
              <input type="email" placeholder="Email" required />
            </div>
          </div>
          <button type="submit">Reset Password</button>
        </form>
      </div>

      <div class="card-footer">
        <a class="link" onclick="showForm('forgotPasswordForm')"
          >Forgot your password?</a
        >
        <br />
        <a class="link" onclick="showForm('createAccountForm')"
          >Don't have an account? Sign up</a
        >
        <br />
        <a class="link" onclick="showForm('signInForm')"
          >Already have an account? Sign in</a
        >
      </div>
    </div>
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-left">
          <h3>Contact Us</h3>
          <p>
            Email:
            <a href="mailto:info@RecycleBulungi.com">info@RecycleBulungi.com</a>
          </p>
          <p>Phone: +256 784 356 572</p>
        </div>
        <div class="footer-right">
          <h3>Follow Us</h3>
          <div class="social-icons">
            <a href="https://www.facebook.com/company" target="_blank">
              <img
                src="images/facebook-icon.svg"
                alt="Facebook"
                width="35"
              /><strong style="color: black">Facebook</strong>
            </a>
            <a href="https://www.twitter.com/company" target="_blank">
              <img
                src="images/twitter-icon.svg"
                alt="Twitter"
                width="35"
              /><strong style="color: black">Twitter</strong>
            </a>
            <a href="https://www.linkedin.com/company" target="_blank">
              <img
                src="images/linkedin2-icon.svg"
                alt="LinkedIn"
                width="40"
              /><strong style="color: black">LinkedIn</strong>
            </a>
            <a href="https://www.instagram.com/company" target="_blank">
              <img
                src="images/instagram-icon.svg"
                alt="Instagram"
                width="35"
              /><strong style="color: black">Instagram</strong>
            </a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p><strong>&copy; 2024 RecycleBulungi. All rights reserved.</strong></p>
      </div>
    </footer>
  </body>
</html>
