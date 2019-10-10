<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Museodio</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('vendor\leaflet\leaflet\leaflet.css')}}">
  <link rel="stylesheet" href="{{asset('css/museodio.css')}}">
  <link rel="stylesheet" href="{{asset('css/materialize-css/materialize.css')}}">
  <script src="{{asset('js/materialize-css/materialize.js')}}" charset="utf-8"></script>

</head>
<body>

  <div class="header">
    {{-- TODO : Transform this into a section --}}
    <h1>Museodio</h1>
    <a class="waves-effect waves-light btn">button</a>
  </div>

  <div id="map">

  </div>


  <script type="text/javascript">

  var lat = 46.9973;
  var lon = 6.9378;
  var mainMap = null;

  function initMap() {
    mainMap = L.map('map').setView([lat, lon], 10);
    L.tileLayer('https://tile.osm.ch/switzerland/{z}/{x}/{y}.png', {
      attribution: '',
      zoomControl: true,
      minZoom: 1,
      maxZoom: 20
    }).addTo(mainMap);

    mainMap.zoomControl.setPosition('topright');

    displayCurrentUserPosition();
  }

  function displayCurrentUserPosition(){
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(getPosition);
    }
  }

  function getPosition(position){
    var userLat = position.coords.latitude;
    var userLon = position.coords.longitude;

    mainMap.setView(new L.LatLng(userLat, userLon), 13);

  }

window.onload = function(){
  initMap();
};
</script>
<script src="{{asset('vendor\leaflet\leaflet\leaflet.js')}}" charset="utf-8"></script>
</body>
</html>
