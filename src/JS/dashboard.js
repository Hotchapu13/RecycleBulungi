// Dashboard.js

// Function to add waste
function addWaste(amount) {
    const totalWasteElement = document.getElementById('totalWaste');
    let currentWaste = parseFloat(totalWasteElement.innerText);
    currentWaste += amount;
    totalWasteElement.innerText = currentWaste.toFixed(2);
  }
  
  // Function to populate alerts
  function populateAlerts() {
    const alerts = [
      "Collection on Monday, April 30th at 8 AM.",
      "Special collection for electronics on Friday, May 4th.",
      "Reminder: Compost bins available from June to September."
    ];
  
    const alertsList = document.getElementById('alertsList');
    alerts.forEach(alert => {
      const li = document.createElement('li');
      li.innerHTML = `<strong>Alert:</strong> ${alert}`;
      alertsList.appendChild(li);
    });
  }
  
  // Initialize dashboard
  document.addEventListener("DOMContentLoaded", function() {
    populateAlerts();
  });// Dashboard.js
