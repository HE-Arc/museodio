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
  <link rel="stylesheet" href="{{asset('css/materialize-collection-actions-1.0.0.min.css')}}">

  <script src="{{asset('js/jQuery.js')}}" charset="utf-8"></script>
  <script src="{{asset('vendor\leaflet\leaflet\leaflet.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/materialize-css/materialize.js')}}" charset="utf-8"></script>
  <script type="text/javascript">
  let APP_URL = "{{ env('APP_URL') }}";
  let RECORDED_AUDIO;
  </script>
  <script src="{{asset('js/fetchUtil.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/modalSubmit.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/MProgress.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/materialize-collection-actions-1.0.0.min.js')}}" charset="utf-8"></script>

</head>
<body>

  @include('header')

  @unless (!Auth::check())
  @include('sidenav')

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large action-buttons-color waves-effect waves-circle waves-light modal-trigger" href="#addAudioNoteModal">
      <i class="large material-icons">add</i>
    </a>
  </div>
  @endunless

  @unless(Auth::check())
    @include('sidenavLoginRegister')
  @endunless

  <div id="map"></div>

  @include('modals.register')
  @include('modals.signin')
  @include('modals.addnotes')
  @include('modals.searchusers')

  <script type="text/javascript">
  var mainMap = null;
  var notificationsDropdown;
  var sideNav;

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
      var LOCATION = navigator.geolocation.getCurrentPosition(getPosition);
    }
  }

  function getPosition(position){
    userLat = position.coords.latitude;
    userLong = position.coords.longitude;

    mainMap.setView(new L.LatLng(userLat, userLong), 13);

    $('#note_lat').val(userLat);
    $('#note_long').val(userLong);

    M.updateTextFields();
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

      let customPopup = `<h4>${audioNote.firstName} ${audioNote.lastName}</h4> <br>`;
      let apiURL = "/api/audio-notes/"
      let audioURL = apiURL + "check/" + encodeURI(audioNote.file_name) ;

      let options = {
        method: "GET",
        credentials: "same-origin",
        headers: { 'Content-type': 'application/x-www-form-urlencoded' },
      }

      fetch(APP_URL + audioURL, options)
      .then(function(response){
        if(response.ok){
          if(response.redirected){
            customPopup += "<p class='center' >Log in to hear this audio note!</p>"
            L.marker([audioNote.latitude, audioNote.longitude], {icon: playIcon})
            .addTo(mainMap)
            .bindPopup(customPopup)
          }
          else{
            response.json().then(async function(json){
              if(json.hasOwnProperty('success')){
                customPopup += '<audio controls src="'+ APP_URL + apiURL + "download/" + encodeURI(audioNote.file_name) +'" preload="none"></audio>';
              }
              else{
                customPopup += '<p>This audio note has not been shared with you.</p>'
              }

              L.marker([audioNote.latitude, audioNote.longitude], {icon: playIcon})
              .addTo(mainMap)
              .bindPopup(customPopup)
            });
          }
        }
        else{
          M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});
          response.text().then(async function(text){
          });
        }
      });
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

  function setFocus(field){
    window.setTimeout(() => {
      $(`#${field}`).focus();
    }, 500);
  }

  function initCollections(){
    MaterializeCollectionActions.configureActions($('#mainSearchResults'), [
      {
        name: 'add',
        callback: function (collectionItem, collection) {
          let userID = collectionItem.getAttribute('data-userID');
          submitFriendRequest(userID);
        }
      }
    ]);
  }

  function initEnterDetectors(){

    let elements = {"searchUserModal": "searchUserButton", "registerModal": "registerButton", "loginModal": "loginButton", "addAudioNoteModal": "noteButton"};

    document.getElementById("searchUserModal").addEventListener("keyup", function(event){
      enterDetector(event, "searchUserButton")
    });

    document.getElementById("registerModal").addEventListener("keyup", function(event){
      enterDetector(event, "registerButton")
    });

    document.getElementById("loginModal").addEventListener("keyup", function(event){
      enterDetector(event, "loginButton")
    });

    document.getElementById("addAudioNoteModal").addEventListener("keyup", function(event){
      enterDetector(event, "noteButton")
    });

    document.getElementById("searchuser_search").addEventListener("keyup", function(event){
      if(document.getElementById("searchuser_search").value != ""){
        submitSearch();
      }
    });
  }

  function enterDetector(e, button){
    if (e.keyCode === 13) {
      e.preventDefault();
      document.getElementById(button).click();
    }
  }

  function openFriends(){
    document.getElementById('sideNavButton').click();
    M.Collapsible.getInstance(document.getElementById('friendsCollapsible')).open();
  }

  window.onload = function(){
    initMap();
    M.AutoInit();
    modalSubmitAutoInit();
    displayAudioNotes();

    @unless (!Auth::check())
      getFriends();
    @endunless

    initCollections();
    initEnterDetectors();

  };

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelector('.sidenav');
    sideNav = M.Sidenav.init(elems, {edge: 'right', preventScrolling: true});

    var notificationsDropdownElem = document.querySelector('#notificationsDropdownButton');
    var dropdownOptions = {
        'hover':true,
        'constrainWidth': false,
    }
    notificationsDropdown = M.Dropdown.init(notificationsDropdownElem, dropdownOptions);
  });
</script>
<!-- <script src="{{asset('js/recordAudioUtils.js')}}" charset="utf-8"></script> -->
<script src="{{asset('js/polyfill.js')}}" charset="utf-8"></script>
</body>
</html>
