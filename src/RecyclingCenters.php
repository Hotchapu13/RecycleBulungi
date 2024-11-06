<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="CSS/Header_Footer.css" />
    <link rel="stylesheet" type="text/css" href="CSS/RecyclingCenters.css" />
    <link rel="stylesheet" href="CSS/leaflet.css" />
    <script src="JS/generalScript.js"></script>
    <script src="JS/RecyclingCenters.js"></script>
    <script src="JS/leaflet.js"></script>
    <title>RecyclingCenters</title>

    <!-- Leaflet Control Geocoder (Optional for Autocomplete) -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"
    />
    <script
      src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"
      defer
    ></script>

    <!-- Initialize Leaflet Map -->
    <script src="JS/RecyclingCenters.js" defer></script>
  </head>
  <body>
  <?php include "header.php"; ?>

    <div class="wrapper">
      <div class="recycling-centers-page">
        <h2>Find Recycling Centers</h2>
        <p>
          Locate recycling centers near you using the map or search for a
          specific area.
        </p>

        <!-- Search Field -->
        <input
          id="search-input"
          class="search-input"
          type="text"
          placeholder="Search for recycling centers..."
        />

        <!-- Google Places Autocomplete (Optional) -->
        <!-- Leaflet Control Geocoder will handle this -->

        <!-- OpenStreetMap Container -->
        <div id="map"></div>
      </div>
    </div>

    <?php include "footer.php"; ?>
  </body>
</html>
