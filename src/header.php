<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Header</title>
    <style>
      header {
        font-family: Arial, sans-serif;
        position: fixed;
        /* top: 0;
        left: 0; */
        /* margin-bottom: 10px; */
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        /* background-color: #01b198; */
        height: 60px;
        width: 100vw; /* 100% of the viewport width */
        padding: 10px 0; /* Padding at the top and bottom only */
        overflow: visible;
        z-index: 1000;
        transition: top 0.3s, padding 0.3s;
      }
      .left-header, .right-header {
        padding-left: 40px;
        display: flex;
        gap: 10px;
        cursor: pointer;
        flex-shrink: 0;
      }
      .right-header{
        white-space: nowrap;
      }
      .right-header button {
        padding: 5px 10px;
        font-size: 14px;
        color: #f4f4f4;
        background-color: #01b198;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
      }
      .right-header button:hover{
        cursor: pointer;
        transform: scale(1.05); /* Slightly enlarge the div */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      }
      .logo {
        display: flex;
        /* flex-direction: row;*/
        gap: 5px;
        align-items: center;
      }
      /* /*side menu */
      .menu-icon {
        cursor: pointer;
        margin-right: 10px;
        transition: transform 0.3s, box-shadow 0.3s;
      }
      .menu-icon:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .side-menu {
        font-family: Arial, sans-serif;
        position: fixed;
        top: 70px; /* Adjust this value based on the height of your header */
        left: -250px; /* Hide the menu by default */
        width: 250px;
        height: 100%;
        background-color: #f4f4f4;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        box-sizing: border-box;
        transition: left 0.3s;
        z-index: 999;
      }

      .side-menu.active {
        left: 0; /* Show the menu when active */
      }
      .profile {
        text-align: center;
        margin-bottom: 20px;
      }

      .profile-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
      }

      .username {
        margin-top: 10px;
        font-size: 18px;
        font-weight: bold;
      }

      .menu-items {
        list-style: none;
        padding: 0;
      }

      .menu-items li {
        margin-bottom: 15px;
      }

      .menu-items a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
      }

      .menu-items a:hover {
        color: #007bff;
      }
          /* Dropdown Menu Styles */
    .dropdown {
      position: relative;
      display: inline-block;
      z-index: 1001;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 5px;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content.show {
    display: block;
    }
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    /* .dropdown:hover .dropdown-content {
      display: block;
    } */
    /* Responsive styles */
    @media (max-width: 768px) {
      header{
        flex-wrap: nowrap;
      }
      .left-header, .right-header {
        padding-left: 20px;
        padding-right: 20px;
        gap: 5px;
      }
      .site-name {
        display: none;
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
        <div class="logo" onclick="goToIndex()">
          <img src="images/recycling-icon.svg" width="30" />
          <div class="site-name"><b>RecycleBulungi</b></div>
        </div>
      </div>

      <div class="right-header">
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE): ?>
          <div class="dropdown">
    <img src="images/user.svg" alt="User Icon" class="profile-icon" id="userIcon" style="width: 40px; height: 40px; border-radius: 50%; cursor: pointer;">
    <div class="dropdown-content" id="dropdownContent">
      <a href="Profile.php">Profile</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>
      <?php else: ?>
        <a href="SignUp.php"><button>Sign Up</button></a>
        <a href="SignIn.php"><button>Sign In</button></a>
      <?php endif; ?>
      </div>
    </header>

    <div class="side-menu" id="sideMenu">
      <div class="profile">
        <img
          src="images/user.svg"
          alt="User Profile"
          class="profile-icon"
        />
        <p class="username">
        <?php
        if (isset($_SESSION['name'])) {
          echo htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');
        } else {
          echo 'Guest';
        }
        ?>
        </p>
      </div>
      <ul class="menu-items">
        <li><a href="Profile.php">Profile</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="edu.php">Education</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
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
      function goToIndex() {
        window.location.href = "index.php";
      }
          // Toggle drop-down on user icon click
    document.addEventListener("DOMContentLoaded", function () {
      const userIcon = document.getElementById("userIcon");
      const dropdownContent = document.getElementById("dropdownContent");

      userIcon.addEventListener("click", function (event) {
        event.stopPropagation();
         // Prevent click from bubbling up
        dropdownContent.classList.toggle("show");
      });

      // Close the dropdown if the user clicks outside of it
      document.addEventListener("click", function () {
        if (dropdownContent.classList.contains("show")) {
          dropdownContent.classList.remove("show");
        }
      });
    });

    // JavaScript to handle the notification card
    document.addEventListener("DOMContentLoaded", function() {
      const notification = document.getElementById("sessionExpiredNotification");
      if (notification) {
        notification.style.display = "block";
        setTimeout(() => {
          notification.style.opacity = 1;
        }, 100); // Start fade-in after a short delay

        // Add event listener to hide the notification on click
        document.addEventListener("click", function() {
          notification.style.opacity = 0;
          setTimeout(() => {
            notification.style.display = "none";
          }, 500); // Ensure display is set to none after fade-out
        });
      }

      // Poll the server for session status
      setInterval(() => {
        fetch('check_session.php')
          .then(response => response.json())
          .then(data => {
            if (data.session_expired) {
              notification.style.display = "block";
              setTimeout(() => {
                notification.style.opacity = 1;
              }, 100); // Start fade-in after a short delay
            }
          });
      }, 5000); // Check every 5 seconds
    });
    </script>
    <script src="generalScript.js"></script>
  </body>
</html>
