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
  <link rel="stylesheet" href="{{asset('css/MProgress.css')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="{{asset('js/jQuery.js')}}" charset="utf-8"></script>
  <script src="{{asset('vendor\leaflet\leaflet\leaflet.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/materialize-css/materialize.js')}}" charset="utf-8"></script>
  <script type="text/javascript">
    let APP_URL = "{{ env('APP_URL') }}";
  </script>
  <script src="{{asset('js/fetchUtil.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/modalSubmit.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/MProgress.js')}}" charset="utf-8"></script>

</head>
<body>

  @include('header')

  @unless (!Auth::check())
    @include('sidenav')
  @endunless

  <div id="map"></div>

  @include('modals.register')
  @include('modals.signin')
  @include('modals.addnotes')

  <div class="fixed-action-btn">
  <a class="btn-floating btn-large action-buttons-color waves-effect waves-circle waves-light modal-trigger" href="#addAudioNoteModal">
    <i class="large material-icons">add</i>
  </a>
</div>

  <script type="text/javascript">
  var mainMap = null;

  function initMap(lat = 46.9973, lon = 6.9378) {
    mainMap = L.map('map').setView([lat, lon], 10);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '',
      zoomControl: true,
      minZoom: 1,
      maxZoom: 19 //Max zoom before OSM gives 404s
    }).addTo(mainMap);

    mainMap.zoomControl.setPosition('bottomleft');

    displayCurrentUserPosition();
  }

  function closeAllModals(){
    $('.modal.open').each(function(modal){
      var instance = M.Modal.getInstance(this);
      instance.close();
    });
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
      popupAnchor:  [0, -18]
    });

    for(let audioNote of audioNotes) {
      // TODO src : set complete URL
      let customPopup = `<h4>${audioNote.firstName} ${audioNote.lastName}</h4> <br>`;
      customPopup += `<audio controls src="api/audio-notes/download/${encodeURI(audioNote.file_name)}" preload="none"></audio>`;

      L.marker([audioNote.latitude, audioNote.longitude], {icon: playIcon})
        .addTo(mainMap)
        .bindPopup(customPopup)
    }
  }

  function toggleMainSlide(){
    if(mainSlide.isOpen == false){
      mainSlide.open();
    }
    else{
      mainSlide.close();
    }
  }

  window.onload = function(){
    initMap();
    M.AutoInit();
    modalSubmitAutoInit();
    displayAudioNotes();
  };

  document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems, {edge: 'right'});

 });
</script>

</body>
</html>
