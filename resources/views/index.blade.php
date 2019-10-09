<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Museodio</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('vendor\leaflet\leaflet\leaflet.css')}}">

  <style media="screen">
  #map{
    height:400px;
  }
  </style>
</head>
<body>
  <h1>Hello</h1>
  <div id="map">

  </div>


  <script type="text/javascript">

  var lat = 48.852969;
  var lon = 2.349903;
  var macarte = null;

  function initMap() {
    macarte = L.map('map').setView([lat, lon], 11);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
      attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
      minZoom: 1,
      maxZoom: 20
    }).addTo(macarte);
  }
  window.onload = function(){
    initMap();
  };
  </script>
  <script src="{{asset('vendor\leaflet\leaflet\leaflet.js')}}" charset="utf-8"></script>
</body>
</html>
