<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <script src="JS/generalScript.js"></script>
    <title>About Us - RecycleBulungi</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
      }
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        padding-top: 80px;
      }
      .content {
        width: 100%;
        max-width: 800px;
        box-sizing: border-box;
        text-align: left;
      }
      .content h1, .content h2 {
        color: #01b198;
      }
      .content p, .content ul {
        color: #333;
        line-height: 1.6;
      }
      .content ul {
        padding-left: 20px;
      }
      .content ul li {
        margin-bottom: 10px;
      }
      @media (max-width: 768px) {
        .content {
          width: 90%;
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
        </ul>
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
    <div class="container">
      <div class="content">
        <h1>About Us</h1>
        <p>
          Welcome to RecycleBulungi, your partner in sustainable waste
          management and recycling solutions. We are a dedicated team focused on
          improving waste management practices in Mbarara and surrounding
          regions, providing tools and resources that make it easier for
          individuals, businesses, and organizations to dispose of waste
          responsibly and locate recycling centers.
        </p>

        <h2>Our Mission</h2>
        <p>
          Our mission is to empower communities to take control of their waste
          management, reducing the environmental and health risks associated
          with improper disposal. By creating a centralized platform for waste
          management, we aim to make recycling accessible and convenient for
          all, ensuring a cleaner and safer environment for future generations.
        </p>

        <h2>Why We Exist</h2>
        <p>
          RecycleBulungi was founded to tackle the growing problem of waste
          mismanagement in Uganda. Events like the tragic landslide at the
          Kiteezi garbage dump in Kampala highlighted the urgent need for
          change. This incident demonstrated the risks posed by poor waste
          disposal practices—not only to the environment but to human life. We
          believe everyone deserves a cleaner, safer world, and that starts with
          responsible waste management.
        </p>
        <p>Our platform addresses several key challenges:</p>
        <ul>
          <li>
            <strong>Locating Recycling Centers:</strong> We connect users with
            nearby recycling facilities, making it easy to find centers that
            accept specific types of waste. This eliminates the guesswork and
            encourages regular recycling.
          </li>
          <li>
            <strong>Education and Awareness:</strong> We offer tips and guidance
            on proper waste disposal and recycling techniques to build a
            community of informed, environmentally conscious citizens.
          </li>
          <li>
            <strong>Incentives for Recycling:</strong> To inspire more people to
            recycle, we provide rewards and incentives that users can earn and
            redeem based on their recycling efforts.
          </li>
          <li>
            <strong>Scheduling and Alerts:</strong> Users receive timely
            notifications about upcoming waste collection days, changes in
            recycling guidelines, and community recycling events.
          </li>
        </ul>

        <h2>Our Vision</h2>
        <p>
          We envision a future where communities across Uganda and beyond
          actively participate in sustainable waste management. By building a
          culture of recycling and environmental awareness, we can reduce waste,
          create jobs, and make a positive impact on our environment.
        </p>

        <h2>What We Offer</h2>
        <ul>
          <li>
            <strong>Recycling Center Locator:</strong> A convenient tool to find
            recycling centers near you.
          </li>
          <li>
            <strong>Tracking and Reporting:</strong> Keep track of your
            recycling efforts and view your contributions toward a greener
            future.
          </li>
          <li>
            <strong>Community Engagement:</strong> Join events, challenges, and
            forums to connect with others passionate about sustainable
            practices.
          </li>
          <li>
            <strong>Data and Insights:</strong> See the impact of your recycling
            and waste reduction activities through detailed analytics and
            reports.
          </li>
        </ul>

        <h2>Join Us in Making a Difference</h2>
        <p>
          Every small action counts. By using RecycleBulungi for your waste
          management and recycling needs, you’re supporting a movement that
          prioritizes sustainability, public health, and environmental
          protection. Together, we can build a cleaner, greener Uganda.
        </p>
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
    <script>
      function toggleMenu() {
        const sideMenu = document.getElementById("sideMenu");
        sideMenu.classList.toggle("active");
      }
      document.addEventListener("click", function (event) {
        const sideMenu = document.getElementById("sideMenu");
        const menuIcon = document.querySelector(".menu-icon");
        if (
          !sideMenu.contains(event.target) &&
          !menuIcon.contains(event.target)
        ) {
          sideMenu.classList.remove("active");
        }
      });
    </script>
  </body>
</html>
