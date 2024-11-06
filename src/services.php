<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/services.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <script src="JS/generalScript.js"></script>
    <title>services-RecycleBulungi</title>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const services = document.querySelectorAll(".service");

        services.forEach((service) => {
          service.addEventListener("click", function () {
            const targetUrl = service.getAttribute("data-url");
            if (targetUrl) {
              window.location.href = targetUrl;
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <header>
      <div class="left-header">
        <div class="menu-icon" onclick="toggleMenu()">
          <img src="images/menu-icon.svg" width="25" alt="Menu Icon" />
        </div>
        <div class="logo">
          <img src="images/recycling-icon.svg" width="25" />
        </div>
        <div class="site-name">RecycleBulungi</div>
      </div>
      <nav>
        <ul>
          <li><a href="about.php" target="_self">About</a></li>
          <li><a href="services.php" target="_self">Services</a></li>
          <li><a href="contact.php" target="_self">Contact</a></li>
          <li><a href="edu.php" target="_self">Education</a></li>
        </ul>
      </nav>
      <div class="right-header">
        <a href="SignUp.php"><button>Sign Up</button></a>
        <a href="SignIn.php"><button>Sign In</button></a>
      </div>
    </header>

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

    <!--Page content-->
    <div class="wrapper">
      <div class="intro">
        <h1>Welcome to RecycleBulungi</h1>
        <p>
          Your one-stop solution for recycling, education, and sustainable
          living.
        </p>
      </div>

      <div id="services">
        <div class="service" data-url="marketplace.php">
          <h2>Marketplace</h2>
          <p>Buy, sell or exchange recyclable materials.</p>
        </div>
        <div class="service" data-url="edu.php">
          <h2>Recycling Education</h2>
          <p>Learn how to recycle effectively and reduce waste.</p>
        </div>
        <div class="service" data-url="RecyclingCenters.php">
          <h2>Recycling Centers</h2>
          <p>Find a recycling center near you.</p>
        </div>
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
