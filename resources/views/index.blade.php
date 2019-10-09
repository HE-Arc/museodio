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

</head>
<body>

  <div class="header">
    {{-- TODO : Transform this into a section --}}
    <h1>Museodio</h1>
  </div>

  <div id="map">

  </div>


  <script type="text/javascript">

  var lat = 46.9973;
  var lon = 6.9378;
  var mainMap = null;

  function initMap() {
    mainMap = L.map('map').setView([lat, lon], 17);
    L.tileLayer('https://tile.osm.ch/switzerland/{z}/{x}/{y}.png', {
      attribution: '',
      zoomControl: true,
      minZoom: 1,
      maxZoom: 20
    }).addTo(mainMap);

    mainMap.zoomControl.setPosition('topright');
  }
  window.onload = function(){
    initMap();
  };
  </script>
  <script src="{{asset('vendor\leaflet\leaflet\leaflet.js')}}" charset="utf-8"></script>
</body>
</html>
