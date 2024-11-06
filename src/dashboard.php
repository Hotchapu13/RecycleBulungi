<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Dashboard.css" />
    <script src="JS/generalScript.js" defer></script>
    <script src="JS/dashboard.js" defer></script>
    <title>Dashboard - RecycleBulungi</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
      }
      .container {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }
      .main-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        width: 100%;
        max-width: 1200px;
      }
      .card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #c3e0b2;
        padding: 20px;
        flex: 1 1 calc(33.333% - 40px);
        box-sizing: border-box;
        text-align: center;
        transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
      }
      .card:hover{
        cursor: pointer;
    transform: scale(1.05); /* Slightly enlarge the div */
    background-color: #d4f1c5; /* Brighter shade of green */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Shadow effect */
      }
      .container h1{
        color: #01b198;
      }
      .card h2 {
        margin-top: 0;
        color: #01b198;
      }
      .progress-circle {
        position: relative;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: conic-gradient(#01b198 calc(var(--progress) * 1%), #f8f9fa 0);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
      }
      .progress-circle span {
        position: absolute;
        font-size: 18px;
        color: #01b198;
      }
      @media (max-width: 768px) {
        .card {
          flex: 1 1 calc(50% - 40px);
        }
      }
      @media (max-width: 480px) {
        .card {
          flex: 1 1 100%;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="left-header">
        <div class="menu-icon" onclick="toggleMenu()">
          <img src="images/menu-icon.svg" width="25" alt="Menu Icon" />
        </div>
        <div class="logo">
          <img
            src="images/recycling-icon.svg"
            width="25"
            alt="Recycling Logo"
          />
        </div>
        <div class="site-name">RecycleBulungi</div>
      </div>
      <nav>
        <ul>
          <li><a href="about.htm" target="_self">About</a></li>
          <li><a href="services.htm" target="_self">Services</a></li>
          <li><a href="contact.htm" target="_self">Contact</a></li>
          <li><a href="edu.htm" target="_self">Education</a></li>
      </nav>
      <div class="right-header">
        <a href="SignUp.htm"><button>Sign Up</button></a>
        <a href="SignIn.htm"><button>Sign In</button></a>
      </div>
    </header>

    <div class="side-menu" id="sideMenu">
      <div class="profile">
        <img
          src="images/user-icon.png"
          alt="User Profile"
          class="profile-icon"
        />
        <p class="username">Username</p>
      </div>
      <ul class="menu-items">
        <li><a href="edit_profile.htm">Edit Profile</a></li>
        <li><a href="dashboard.htm">Dashboard</a></li>
        <li><a href="settings.htm">Settings</a></li>
        <li><a href="about_us.htm">About Us</a></li>
        <li><a href="logout.htm">Logout</a></li>
      </ul>
    </div>

    <!-- Main Content Area -->
    <div class="container">
      <h1>Waste Management Dashboard</h1>
      <div class="main-content">
        <!-- Track Recycling Section -->
        <div class="card">
          <h2>Track Recycling Efforts</h2>
          <div class="progress-circle" style="--progress: 0.5;">
            <span id="totalWaste">0 kg</span>
          </div>
          <button onclick="addWaste(5)">Add 5 kg</button>
        </div>
  
        <!-- Alerts Section -->
        <div class="card">
          <h2>Upcoming Collection Alerts</h2>
          <ul id="alertsList">
            <!-- Alerts will be populated here dynamically -->
          </ul>
        </div>
  
        <!-- Tips Section -->
        <div class="card">
          <h2>Recycling Tips</h2>
          <p id="recyclingTip">Remember to separate your recyclables and non-recyclables to make recycling easier!</p>
        </div>
  
        <!-- Services Section -->
        <div class="card" data-url="marketplace.htm">
          <h2>Marketplace</h2>
          <p>Buy, sell or exchange recyclable materials.</p>
        </div>
        <div class="card" data-url="edu.htm">
          <h2>Recycling Education</h2>
          <p>Learn how to recycle effectively and reduce waste.</p>
        </div>
        <div class="card" data-url="RecyclingCenters.htm">
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
