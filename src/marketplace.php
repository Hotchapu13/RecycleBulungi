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
    <link rel="stylesheet" type="text/css" href="CSS/marketplace.css"/>
    <title>marketplace-RecycleBulungi</title>
    <script src="JS/generalScript.js"></script>
  </head>
  <body>
        <?php include "header.php"; ?>


    <div class="wrapper">
      <div class="content">
        <div class="Info">

        </div>
        <div class="buy_sell">
          <img src="images/Money.svg" alt="items that can be exchanged" width=" "/>
            <h2>Buy/Sell</h2>
            <p>Transform your waste into money! Our platform connects you with buyers eager to purchase your sorted recyclables. Sell plastics, metals, paper, and electronics while supporting environmental sustainability. Every kilogram matters—start earning from your recyclables today!</p>
        </div>

        <div class="section2">
          <img src="images/exchange.svg" alt="items that can be exchanged" width=""/>
            <h2>Exchange</h2>
            <p>Trade your recyclables instead of trashing them! Swap plastics for metal scraps, cardboard for electronic components, and connect with a community that turns waste into valuable resources. Join our platform and be part of the circular economy in just minutes!</p>
        </div>
        </div>         
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>
