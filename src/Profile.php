<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="JS/generalScript.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
  <title>Profile - RecycleBulungi</title>
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
    }
    .profile-card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 100%;
      max-width: 600px;
      box-sizing: border-box;
      text-align: center;
    }
    .profile-card h2 {
      margin-top: 0;
      color: #01b198;
    }
    .profile-card img {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      margin-bottom: 20px;
    }
    .profile-card p {
      margin: 10px 0;
      color: #333;
    }
    .profile-card form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .profile-card input, .profile-card button {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
      box-sizing: border-box;
    }
    .profile-card button {
      background-color: #01b198;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .profile-card button:hover {
      background-color: #019a87;
    }
    @media (max-width: 768px) {
      .profile-card {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="left-header">
      <div class="menu-icon" onclick="toggleMenu()">
        <img src="images/menu-icon.svg" width="25" alt="Menu Icon">
      </div>
      <div class="logo">
        <img src="images/recycling-icon.svg" width="25" alt="Recycling Logo">
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
      <img src="images/user-icon.png" alt="User Profile" class="profile-icon">
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
    <div class="profile-card">
      <img src="images/user-icon.png" alt="User Profile">
      <h2>John Doe</h2>
      <p>Email: john.doe@example.com</p>
      <p>Phone: +256 784 356 572</p>
      <form id="profileForm">
        <input type="text" id="name" name="name" placeholder="Full Name" value="John Doe">
        <input type="email" id="email" name="email" placeholder="Email" value="john.doe@example.com">
        <input type="tel" id="phone" name="phone" placeholder="Phone Number" value="+256 784 356 572">
        <button type="submit">Update Profile</button>
      </form>
    </div>
  </div>

  <script>
    function toggleMenu() {
      const sideMenu = document.getElementById("sideMenu");
      sideMenu.classList.toggle("active");
    }
    document.addEventListener("click", function (event) {
      const sideMenu = document.getElementById("sideMenu");
      const menuIcon = document.querySelector(".menu-icon");
      if (!sideMenu.contains(event.target) && !menuIcon.contains(event.target)) {
        sideMenu.classList.remove("active");
      }
    });
    document.getElementById('profileForm').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Profile updated successfully!');
    });
  </script>
</body>
</html>