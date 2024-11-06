<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <style>
      footer {
        position: relative;
        bottom: 0;
        margin-top: 50px;
        background: #21b5a8;
        text-align: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        width: 100%;
        z-index: 998;
        padding: 20px;
      }
      .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .footer-left {
        padding-left: 40px;
        display: grid;
        gap: 10px;
        align-items: baseline;
      }
      .footer-right {
        padding-right: 40px;
        display: grid;
        gap: 10px;
        align-items: center;
      }
      .social_icons {
        display: flex;
        gap: 10px;
        align-items: center;
      }
      .social-icons a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: white;
      }
      .social-icons img {
        width: 30px;
        height: 30px;
        margin-right: 5px;
      }
      @media (max-width: 768px) {
        .footer-container {
          flex-direction: column;
          align-items: center;
        }
        .footer-left,
        .footer-right {
          padding: 0;
          text-align: center;
        }
      }
            /* Responsive styles */
            @media (max-width: 768px) {
        header,
        footer {
          flex-direction: column;
          text-align: center;
        }

        header .left-header,
        footer .footer-left,
        header .right-header,
        footer .footer-right {
          width: 100%;
          padding: 10px 0;
        }

        header .logo,
        footer .social-icons {
          justify-content: center;
        }
      }
    </style>
  </head>
  <body>
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-left">
          <h3>Contact Us</h3>
          <p>
            Email:
            <a href="mailto:info@RecycleBulungi.com">info@RecycleBulungi.com</a>
          </p>
          <p>Phone: <a href="tel:+256784356572">+256 784 356 572</a></p>
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
