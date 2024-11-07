<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== TRUE) {
    header('Location: SignIn.php');
    exit();
}
?>
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
    <?php include "header.php"; ?>

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
        <div class="card" data-url="marketplace.php">
          <h2>Marketplace</h2>
          <p>Buy, sell or exchange recyclable materials.</p>
        </div>
        <div class="card" data-url="edu.php">
          <h2>Recycling Education</h2>
          <p>Learn how to recycle effectively and reduce waste.</p>
        </div>
        <div class="card" data-url="RecyclingCenters.php">
          <h2>Recycling Centers</h2>
          <p>Find a recycling center near you.</p>
        </div>
      </div>
    </div>

    <?php include "footer.php"; ?>

  </body>
</html>
