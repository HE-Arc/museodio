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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="{{asset('js/materialize-css/materialize.js')}}" charset="utf-8"></script>

</head>
<body>

  <div class="header-container">
    <div class="header">
      {{-- TODO : Transform this into a section --}}
      <nav class="main-nav-bar">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo mus-title">Museodio</a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a></li>
            <li><a class="waves-effect waves-light btn">Register <i class="material-icons right">person_add</i></a></li>
            <li><a class="waves-effect waves-light btn">Sign in <i class="material-icons right">input</i></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>


  <div id="map"></div>


  <div id="loginModal" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
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

    mainMap.zoomControl.setPosition('bottomleft');

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
    M.AutoInit();
  };
</script>
<script src="{{asset('vendor\leaflet\leaflet\leaflet.js')}}" charset="utf-8"></script>
</body>
</html>
