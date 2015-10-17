<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CLEAN BLUE</title>
<meta name="viewport" content="initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

<style>
      #map {
        height: 650px;
		width: 850px;
      }
    </style>
    <script>

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 6.237006, lng: 101.243813},
    zoom: 5
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOO7sPpQq0vroi7cvVhtndHM7MUhBhRrk&callback=initMap"
        async defer></script>
</head>
<body>

<?php include("header.php"); ?>
<?php include("manu1.php"); ?>
<?php include("manu3.php"); ?>
<div class=" col-md-9">
<div class="panel panel-success">
  <div class="panel-body">
 
  <p>
    
    <!-----เงื่อนไข-!--->ค้นหาด้วย GPS  <img src="images/iioi.jpg" alt="" width="250" height="40" />
    </p>
  <div id="map"></div>
   
 
   
</div>
</div>
</body>
</html>