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

  // Define custom icon
  const customIcon = L.icon({
    iconUrl: "images/push-pin-green-icon.svg", // Path to your custom icon
    iconSize: [38, 38], // Size of the icon [width, height]
    iconAnchor: [19, 38], // Point of the icon that will correspond to the marker's location
    popupAnchor: [0, -38], // Point where the popup should open relative to the iconAnchor
  });

  // Initialize a layer group for recycling centers
  const recyclingCentersLayer = L.layerGroup().addTo(map);

  // Sample Recycling Centers Data
  const recyclingCenters = [
    {
      name: "Ntare Garbage collection Centre",
      lat: -0.5953109605801258,
      lng: 30.650525064191307,
      address: "9JWX+QQQ, Mbarara",
    },
    {
      name: "Kamukuzi Garbage Collection Center",
      lat: -0.5977140895657123,
      lng: 30.642628641072783,
      address: "9JVV+HV9, Road, Mbarara",
    },
    {
      name: "Boma Garbage Collection Center",
      lat: -0.608356505232715,
      lng: 30.650525064191307,
      address: "9JMX+RP6, Mbarara",
    },
    {
      name: "BSU Garbage Collection Center",
      lat: -0.6007287122896015,
      lng: 30.695468206931388,
      address: "9MWW+Q7X, University Rd, Mbarara",
    },
    {
      name: "MUST Garbage Collection Center",
      lat: -0.6151957440981288,
      lng: 30.65509023761746,
      address: "9MM4+24R, Mbarara",
    },
    {
      name: "Boma Garbage Collection Center",
      lat: -0.608356505232715,
      lng: 30.650525064191307,
      address: "9JMX+RP6, Mbarara",
    },
    {
      name: "ECO Brixs",
      lat: -0.3237828501329017,
      lng: 31.73133993660707,
      address: "MPFJ+FJR, Masaka-Mbarara By-pass Rd, Masaka",
    },
    {
      name: "Uganda Plastics Manufacturers And Recyclers Association",
      lat: 0.3194663398183941,
      lng: 32.58439303764817,
      address: "Agip House, 28, Jinja Road, Kampala",
    },
    {
      name: "KCCA Waste Recycling Center",
      lat: 0.3052164415259067,
      lng: 32.65215376431483,
      address:
        "near National Water and Hisense Wankoko, off of Port Bell Rd, Kampala",
    },
    // Add more centers as needed
  ];

  // Function to add markers to the map
  function addMarkers(centers) {
    recyclingCentersLayer.clearLayers(); // Clear existing markers

    centers.forEach((center) => {
      const marker = L.marker([center.lat, center.lng], {
        icon: customIcon,
      }).addTo(recyclingCentersLayer);

      // Bind popup to marker
      marker.bindPopup(`<strong>${center.name}</strong><br>${center.address}`);
    });
  }

  // Initially add all markers
  addMarkers(recyclingCenters);

  // Initialize Leaflet Control Geocoder (Search Box with Autocomplete)
  // if (L.Control.Geocoder) {
  //   const geocoder = L.Control.Geocoder.nominatim();

  //   L.Control.geocoder({
  //     query: "",
  //     placeholder: "Search for recycling centers...",
  //     geocoder: geocoder,
  //     defaultMarkGeocode: false,
  //   })
  //     .on("markgeocode", function (e) {
  //       const bbox = e.geocode.bbox;
  //       const poly = L.polygon([
  //         bbox.getSouthEast(),
  //         bbox.getNorthEast(),
  //         bbox.getNorthWest(),
  //         bbox.getSouthWest(),
  //       ]);
  //       map.fitBounds(poly.getBounds());
  //     })
  //     .addTo(map);
  // } else {
  //   console.error("Leaflet Control Geocoder plugin is not loaded.");
  // }

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
