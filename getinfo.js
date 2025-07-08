navigator.geolocation.getCurrentPosition(function(position) {
  fetch("logger.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      lat: position.coords.latitude,
      lon: position.coords.longitude,
      userAgent: navigator.userAgent
    })
  });
});
