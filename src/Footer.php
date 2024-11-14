<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      .footer {
        font-family: Arial, sans-serif;
        position: relative;
        bottom: 0;
        margin-top: 50px;
        background: #54595f;
        text-align: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        box-sizing: border-box;
        width: 100%;
        z-index: 998;
        padding: 40px 20px 20px 20px;
        padding-bottom: 0px;
      }
      .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }
      .footer-top {
        display: flex;
        justify-content: space-between; /* Distributes items evenly */
        align-items: center; /* Aligns items vertically centered */
        width: 100%;
      }
      .footer-left,
      .footer-right,
      .foooter-middle {
        flex: 1;
        padding-left: 40px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        color: #bdbdbd;
        padding-bottom: 10px;
      }

      /*contact us div*/
      .footer-left {
        text-align: left;
        margin-right: 25px;
      }

      /*newsletter div*/
      .footer-middle {
        background: #54595f;
        padding: 20px;
        border-radius: 8px;
        width: 300px;
        text-align: center;
        color: #bdbdbd;
        margin: 0 25px;
      }
      .footer-middle h2 {
        font-size: 16px;
        margin-bottom: 20px;
        color: #bdbdbd;
      }
      .footer-middle form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 4px;
        background-color: #63686d;
        color: #bdbdbd;
        font-size: 14px;
      }
      .footer-middle form input::placeholder {
        color: #bdbdbd;
      }
      .footer-middle form button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #1abc9c;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
      }
      .footer-middle form button:hover {
        background-color: #16a085;
      }

      /*socials icons div*/
      .footer-right {
        text-align: center;
        margin-left: 25px;
      }
      .social_icons {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
      }
      .social-icons a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #bdbdbd;
      }
      .social-icons img {
        width: 30px;
        height: 30px;
        margin-right: 5px;
        transition: transform 0.3s;
      }
      .social-icons img:hover {
        transform: scale(1.1);
      }

      /*copyright div*/
      .footer-bottom {
        background-color: #54595f;
        margin-bottom: 0px;
        width: 100%;
        text-align: center;
        padding-top: 20px;
        color: #bdbdbd;
      }
      @media (max-width: 768px) {
        .footer-container {
          flex-direction: column;
          align-items: center;
        }
      /* Footer Top - Stack Vertically */
      .footer-top {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 30px;
        padding: 0 10px;
      }

      .footer-left,
      .footer-middle,
      .footer-right {
        text-align: center;
        padding: 0;
        margin: 10px 0;
      }


        .social-icons {
          flex-direction: row;
          flex-wrap: wrap;
          justify-content: center;
        }

        .social-icons a {
          gap: 5px;
        }

        .input-group {
          flex-direction: column;
        }

        .newsletter-form input[type="email"],
        .newsletter-form button {
          width: 100%;
          border-radius: 4px;
          border-right: 2px solid #1abc9c;
        }

        .newsletter-form button {
          border-top: none;
          margin-top: 10px;
          border-radius: 4px;
        }
      }

      @media (max-width: 480px) {
        .footer {
          display:flex;
          align-items: center;
        }
        .footer-left,
        .footer-middle,
        .footer-right {
          min-width: 200px;
          margin: 0 10px;
          align-items: center;
        }
        .footer-top {
        padding: 0 10px;
        }
        /* Reduce social icons size */
        .social-icons img {
          width: 25px;
          height: 25px;
        }

        .social-icons span {
          font-size: 12px;
        }

        /* Adjust newsletter form elements */
        .newsletter-form input[type="email"],
        .newsletter-form button {
          font-size: 14px;
          padding: 10px;
        }

        /* Adjust footer bottom text size */
        .footer-bottom p {
          font-size: 12px;
        }

        /* Adjust subscription message */
        .subscription-message {
          font-size: 12px;
        }
      
        .newsletter-form input[type="email"],
        .newsletter-form button {
          font-size: 12px;
          padding: 10px 15px;
        }

        .subscription-message {0
          font-size: 12px;
        }

        .social-icons img {
          width: 30px;
        }

        .social-icons span {
          font-size: 12px;
        }
      }
    </style>
  </head>
  <body>
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-top">
          <div class="footer-left">
            <h3>Contact Us</h3>
            <p>
              Email:
              <a href="mailto:info@RecycleBulungi.com"
                >info@RecycleBulungi.com</a
              >
            </p>
            <p>Phone: <a href="tel:+256784356572">+256 784 356 572</a></p>
          </div>
          <div class="footer-middle">
            <h3>Subscribe to Our Newsletter</h3>
            <form class="newsletter-form" action="subscribe.php" method="POST">
              <div class="input-group">
                <input type="text" name="name" placeholder="Name" required />
                <input
                  type="email"
                  name="email"
                  placeholder="Enter your Email"
                  required
                />
                <button type="submit">Subscribe</button>
              </div>
            </form>
            <p class="subscription-message">
              Stay updated with our latest news and offers.
            </p>
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
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 RecycleBulungi. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
