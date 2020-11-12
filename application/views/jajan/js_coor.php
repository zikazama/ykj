<script>
var x = document.getElementById("info");
var lat = document.getElementById("latitude");
var long = document.getElementById("longitude");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation tidak mendukung pada perangkat ini.";
  }
}
function showPosition(position) {
    lat.value = position.coords.latitude;
    long.value = position.coords.longitude;
}
getLocation();
</script>