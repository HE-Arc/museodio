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
  <script src="{{asset('js/fetchUtil.js')}}" charset="utf-8"></script>

</head>
<body>

  <div class="header-container">
    <div class="header">
      {{-- TODO : Transform this into a section --}}
      <nav class="main-nav-bar">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo mus-title">Museodio</a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect waves-light btn modal-trigger" href="#loginModal">Register <i class="material-icons right">person_add</i></a></li>
            <li><a class="waves-effect waves-light btn">Sign in <i class="material-icons right">input</i></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>


  <div id="map"></div>

  <div id="loginModal" class="modal">
    <div class="modal-content">
      <h2>Register</h2>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Confirm password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
        </form>
      </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn">Agree</a>
    </div>
  </div>

  <script type="text/javascript">
  var mainMap = null;

  function initMap(lat = 46.9973, lon = 6.9378) {
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

  async function displayAudioNotes() {
    const audioNotes = await fetchAudioNotes();

    const playIcon = L.icon({
      iconUrl: 'img/baseline_play_circle_outline_black_18dp.png',

      iconSize:     [36, 36],
      iconAnchor:   [18, 18],
      shadowAnchor: [0, 0],
      popupAnchor:  [0, -36]
    });

    for(let audioNote of audioNotes) {
      let customPopup = `<h4>${audioNote.firstName} ${audioNote.lastName}</h4> <br>`
      customPopup += "<audio controls></audio>"

      L.marker([audioNote.latitude, audioNote.longitude], {icon: playIcon})
        .addTo(mainMap)
        .bindPopup(customPopup)
        .openPopup();
    }
  }

  window.onload = function(){
    initMap();
    M.AutoInit();
    displayAudioNotes();
  };
</script>
<script src="{{asset('vendor\leaflet\leaflet\leaflet.js')}}" charset="utf-8"></script>
</body>
</html>
