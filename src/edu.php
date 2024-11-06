<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <link rel="stylesheet" type="text/css" href="CSS/Edu.css" />
    <script src="JS/generalScript.js"></script>
    <title>Education-RecycleBulungi</title>
  </head>
  <body>
    <?php include "header.php"; ?>

    <div class="wrapper">
      <div class="education-page">
        <h2>Recycling Education</h2>
        <p>
          Learn how to recycle efficiently and understand what materials can be
          recycled.
        </p>

        <!-- Articles Section -->
        <section class="articles">
          <h3>Latest Articles</h3>
          <div class="article">
            <h4>
              <a href="https://www.example.com/article1" target="_blank"
                >Recycling Plastics: Best Practices</a
              >
            </h4>
            <p>
              Discover the most effective methods for recycling plastics and how
              you can contribute to reducing plastic waste.
            </p>
          </div>
          <div class="article">
            <h4>
              <a href="https://www.example.com/article2" target="_blank"
                >The Importance of Paper Recycling</a
              >
            </h4>
            <p>
              Learn about the environmental benefits of recycling paper and tips
              to increase your recycling efforts.
            </p>
          </div>
          <div class="article">
            <h4>
              <a href="https://www.example.com/article3" target="_blank"
                >Innovations in Recycling Technology</a
              >
            </h4>
            <p>
              Explore the latest advancements in recycling technology that are
              making waste management more efficient.
            </p>
          </div>
        </section>

        <!-- Videos Section -->
        <section class="videos">
          <h3>Educational Videos</h3>
          <div class="video">
            <h4>How Recycling Works</h4>
            <div class="video-container">
              <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/VIDEO_ID1"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy"
              ></iframe>
            </div>
          </div>
          <div class="video">
            <h4>The Impact of Waste on the Environment</h4>
            <div class="video-container">
              <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/VIDEO_ID2"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy"
              ></iframe>
            </div>
          </div>
          <div class="video">
            <h4>Tips for Effective Recycling at Home</h4>
            <div class="video-container">
              <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/VIDEO_ID3"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy"
              ></iframe>
            </div>
          </div>
        </section>
      </div>
    </div>

    <?php include "footer.php"; ?>
  </body>
</html>