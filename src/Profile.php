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
      overflow-x: hidden;
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
  <?php include "header.php"; ?> 

  <div class="container">
    <div class="profile-card">
      <img src="images/user-icon.svg" alt="User Profile">
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
  
  <?php include "footer.php"; ?>
  <script>
    document.getElementById('profileForm').addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Profile updated successfully!');
    });
  </script>
</body>
</html>