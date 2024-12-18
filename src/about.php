<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <script src="JS/generalScript.js"></script>
    <title>About Us - RecycleBulungi</title>
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
        <?php include "header.php"; ?>
    <?php include "session_noti.php"; ?>


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
        <br>
        <h2>Our Mission</h2>
        <p>
          Our mission is to empower communities to take control of their waste
          management, reducing the environmental and health risks associated
          with improper disposal. By creating a centralized platform for waste
          management, we aim to make recycling accessible and convenient for
          all, ensuring a cleaner and safer environment for future generations.
        </p>
        <br>
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
        <br>
        <h2>Our Vision</h2>
        <p>
          We envision a future where communities across Uganda and beyond
          actively participate in sustainable waste management. By building a
          culture of recycling and environmental awareness, we can reduce waste,
          create jobs, and make a positive impact on our environment.
        </p>
        <br>
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
        <br>
        <h2>Join Us in Making a Difference</h2>
        <p>
          Every small action counts. By using RecycleBulungi for your waste
          management and recycling needs, you’re supporting a movement that
          prioritizes sustainability, public health, and environmental
          protection. Together, we can build a cleaner, greener Uganda.
        </p>
      </div>
    </div>
<?php include "footer.php"; ?>

  </body>
</html>
