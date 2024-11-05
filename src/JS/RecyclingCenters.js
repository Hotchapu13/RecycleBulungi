// RecyclingCenters.js

document.addEventListener("DOMContentLoaded", function () {
  // Initialize the map
  const map = L.map("map").setView([1.3733, 32.2903], 7); // Default center: Kampala, Uganda

  // Add OpenStreetMap tiles
  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 19,
  }).addTo(map);

  // Initialize a layer group for recycling centers
  const recyclingCentersLayer = L.layerGroup().addTo(map);

  // Sample Recycling Centers Data
  const recyclingCenters = [
    {
      name: "Green Earth Recycling",
      lat: 1.3733,
      lng: 32.2903,
      address: "123 Green St, Kampala",
    },
    {
      name: "Eco Recycling Center",
      lat: 0.3476,
      lng: 32.5825,
      address: "456 Eco Ave, Entebbe",
    },
    {
      name: "Sustainable Recycle Hub",
      lat: 0.3131,
      lng: 32.5811,
      address: "789 Sustain Blvd, Jinja",
    },
    // Add more centers as needed
  ];

  // Function to add markers to the map
  function addMarkers(centers) {
    recyclingCentersLayer.clearLayers(); // Clear existing markers

    centers.forEach((center) => {
      const marker = L.marker([center.lat, center.lng], {
        title: center.name,
      }).addTo(recyclingCentersLayer);

      // Bind popup to marker
      marker.bindPopup(`<strong>${center.name}</strong><br>${center.address}`);
    });
  }

  // Initially add all markers
  addMarkers(recyclingCenters);

  // Initialize Leaflet Control Geocoder (Search Box with Autocomplete)
  if (L.Control.Geocoder) {
    const geocoder = L.Control.Geocoder.nominatim();

    L.Control.geocoder({
      query: "",
      placeholder: "Search for recycling centers...",
      geocoder: geocoder,
      defaultMarkGeocode: false,
    })
      .on("markgeocode", function (e) {
        const bbox = e.geocode.bbox;
        const poly = L.polygon([
          bbox.getSouthEast(),
          bbox.getNorthEast(),
          bbox.getNorthWest(),
          bbox.getSouthWest(),
        ]);
        map.fitBounds(poly.getBounds());
      })
      .addTo(map);
  } else {
    console.error("Leaflet Control Geocoder plugin is not loaded.");
  }

  // Search Functionality
  const searchInput = document.getElementById("search-input");

  searchInput.addEventListener("input", function (e) {
    const query = e.target.value.toLowerCase();

    const filteredCenters = recyclingCenters.filter(
      (center) =>
        center.name.toLowerCase().includes(query) ||
        center.address.toLowerCase().includes(query)
    );

    addMarkers(filteredCenters);
  });
});
