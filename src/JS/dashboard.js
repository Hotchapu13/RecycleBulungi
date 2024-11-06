// Dashboard.js

// Function to add waste
function addWaste(amount) {
  const totalWasteElement = document.getElementById("totalWaste");
  let totalWaste = parseInt(totalWasteElement.textContent) || 0;
  totalWaste += amount;
  totalWasteElement.textContent = totalWaste + " kg";
  document
    .querySelector(".progress-circle")
    .style.setProperty("--progress", totalWaste / 100);
}

// Function to populate alerts
function populateAlerts() {
  const alerts = [
    "Collection on Monday, April 30th at 8 AM.",
    "Special collection for electronics on Friday, May 4th.",
    "Reminder: Compost bins available from June to September.",
  ];

  const alertsList = document.getElementById("alertsList");
  alerts.forEach((alert) => {
    const li = document.createElement("li");
    li.innerHTML = `<strong>Alert:</strong> ${alert}`;
    alertsList.appendChild(li);
  });
}

// Initialize dashboard
document.addEventListener("DOMContentLoaded", function () {
  populateAlerts();
}); // Dashboard.js

function displayRandomTip() {
  const tips = [
    "Remember to separate your recyclables and non-recyclables to make recycling easier!",
    "Rinse out containers before recycling to avoid contamination.",
    "Flatten cardboard boxes to save space in your recycling bin.",
    "Avoid recycling plastic bags; take them to a designated drop-off location instead.",
    "Check local recycling guidelines to ensure you're recycling correctly.",
    "Remove caps and lids from bottles and jars before recycling.",
    "Recycle electronics at designated e-waste recycling centers.",
    "Compost food scraps to reduce waste and create nutrient-rich soil.",
    "Donate old clothes and textiles instead of throwing them away.",
    "Use reusable bags, bottles, and containers to reduce single-use waste.",
  ];
  const randomTip = tips[Math.floor(Math.random() * tips.length)];
  document.getElementById("recyclingTip").textContent = randomTip;
}

// Display a random tip when the page loads
window.onload = displayRandomTip;

// Take the user to the respective service page on the web app
document.querySelectorAll(".card[data-url]").forEach((card) => {
  card.addEventListener("click", () => {
    window.location.href = card.getAttribute("data-url");
  });
});
