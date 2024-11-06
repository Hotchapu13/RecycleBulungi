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
        background-color: #01b198;
        height: 60px;
        width: 100vw; /* 100% of the viewport width */
        padding: 10px 0; /* Padding at the top and bottom only */
        overflow: auto;
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
        background-color: #0d7ded;
        border: none;
        border-radius: 5px;
        cursor: pointer;
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
        <li><a href="Profile.php">Profile</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="services.php">Services</a></li>
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
    </script>
    <script src="generalScript.js"></script>
  </body>
</html>
