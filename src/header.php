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
        top: 0;
        left: 0;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f8f9fa;
        height: 60px;
        width: 100vw; /* 100% of the viewport width */
        padding: 10px 0; /* Padding at the top and bottom only */
        overflow: auto;
        z-index: 1000;
        transition: top 0.3s, padding 0.3s;
      }
      .left-header {
        padding-left: 40px;
        display: flex;
        gap: 10px;
        cursor: pointer;
      }
      .right-header {
        padding-right: 40px;
        display: flex;
        gap: 10px;
      }
      .right-header button {
        padding: 5px 10px;
        font-size: 14px;
        color: #f4f4f4;
        background-color: #0d7ded;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      nav {
        display: flex;
        align-items: center;
        flex-grow: 1;
      }
      nav ul {
        display: flex;
        list-style: none;
        justify-content: center;
        flex-grow: 1;
      }
      nav ul li {
        margin: 0 15px;
        display: inline;
      }
      nav a {
        text-decoration: none;
        color: #000;
        font-size: 16px;
      }
      .logo {
        display: flex;
        flex-direction: row;
        gap: 5px;
        align-items: center;
      }
      /* /*side menu */
      .menu-icon {
        cursor: pointer;
        margin-right: 10px;
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
    </style>
  </head>
  <body>
    <header>
      <div class="left-header">
        <div class="menu-icon" onclick="toggleMenu()">
          <img src="images/menu-icon.svg" width="25" alt="Menu Icon" />
        </div>
        <div class="logo" onclick="goToIndex()">
          <img src="images/recycling-icon.svg" width="25" />
          <div class="site-name">RecycleBulungi</div>
        </div>
      </div>

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
        <li><a href="Profile.htm">Profile</a></li>
        <li><a href="dashboard.htm">Dashboard</a></li>
        <li><a href="services.htm">Services</a></li>
        <li><a href="edu.htm">Education</a></li>
        <li><a href="about.htm">About Us</a></li>
        <li><a href="logout.htm">Logout</a></li>
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
        window.location.href = "index.htm";
      }
    </script>
    <script src="generalScript.js"></script>
  </body>
</html>
