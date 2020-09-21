<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>

<?php include 'header.php'; ?>  

<html>
  <head>
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
  </head>
  <body>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
		function initMap() {
  			var location = {lat: 19.04829022, lng: 72.91167593};
  			var map = new google.maps.Map(
      			document.getElementById("map"), {zoom: 4, center: location});
  			var marker = new google.maps.Marker({position: location, map: map});
		}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA9seNizSKWypyAgUZSLHt80VqcmoB1Ps&callback=initMap">
    </script>
  </body>
</html>

<?php include 'footer.php'; ?> 
