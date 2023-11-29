// External JavaScript file: geolocation.js

// Get the element with the ID "demo"
const displayElement = document.getElementById("demo");

// Attempt to retrieve the user's geolocation
function getLocation() {
  try {
    navigator.geolocation.getCurrentPosition(showPosition);
  } catch (error) {
    displayElement.innerHTML = "Geolocation is not supported by this browser.";
  }
}

// Display the user's position and show it on a Google Map
function showPosition(position) {
  const latitude = position.coords.latitude;
  const longitude = position.coords.longitude;

  // Display the position details
  displayElement.innerHTML =
    "Latitude: " + latitude + "<br>Longitude: " + longitude;

  // Create a Google Map
  const mapOptions = {
    center: { lat: latitude, lng: longitude },
    zoom: 15, // Adjust the zoom level as needed
  };

  const map = new google.maps.Map(document.getElementById("map"), mapOptions);

  // Add a marker for the user's position
  const marker = new google.maps.Marker({
    position: { lat: latitude, lng: longitude },
    map: map,
    title: "Your Location",
  });
}
