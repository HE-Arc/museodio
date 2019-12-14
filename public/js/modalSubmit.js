let headers = {
  Accept: 'application/json',
  'Content-Type': 'application/json',
}

var registerProgressBar;
var loginProgressBar;
var noteProgressBar;
var searchUserProgressBar;

function modalSubmitAutoInit(){
  registerProgressBar = new Mprogress({
    template: 4,
    parent: "#registerProgressBar"
  })

  loginProgressBar = new Mprogress({
    template: 4,
    parent: "#loginProgressBar"
  })

  noteProgressBar = new Mprogress({
    template: 4,
    parent: "#noteProgressBar"
  })

  searchUserProgressBar = new Mprogress({
    template: 4,
    parent: "#searchUserProgressBar"
  })
}

async function submitLogin(){
  toggleButton("loginButton");
  toggleLoginProgressBar();

  payload = {
    email:                  $("#log_email").val(),
    password:               $("#log_password").val()
  };

  sendData(payload, "/api/login", async function(response){
    if(response.ok){
      response.json().then(async function(json){
        if(json.hasOwnProperty('error')){
          displayErrors(json);
        }
        else{
          M.toast({html: "Successfully logged in.", classes: "toast-success"});
          toggleLoginProgressBar();
          await sleep(2000);
          location.reload();
        }
      })
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});
    }
    toggleButton("loginButton");
    toggleLoginProgressBar();
  });
}

async function submitSearch(){
  toggleButton("searchUserButton");
  toggleSearchUserProgressBar();

  let search = $("#searchuser_search").val();
  let searchURL = "/api/users/search/" + search;

  getData(searchURL, async function(response){
    if(response.ok){
      response.json().then(async function(json){
        if(json.hasOwnProperty('error')){
          displayErrors(json);
        }
        else{
          toggleSearchUserProgressBar();
          let mainSearchResults = document.getElementById('mainSearchResults');
          mainSearchResults.innerHTML = "";
          mainSearchResults.style.visibility = "visible"

          jQuery.each(json["success"], function() {
            mainSearchResults.innerHTML += '<li data-userID="'+ $(this)[0]["id"] +'" class="collection-item search-results">'+ $(this)[0]["firstname"] + ' ' + $(this)[0]["lastname"] + '</li>';
          });
        }
      })
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});
    }
    toggleButton("searchUserButton");
    toggleSearchUserProgressBar();
  });
}

async function submitFriendRequest(userID){
  console.log(userID);

  payload = {
    id:                   userID
  }

  sendData(payload, "/api/friends", async function(response){
    if(response.ok){
      response.json().then(async function(json){
        if(json.hasOwnProperty('error')){
          displayErrors(json);
        }
        else{
          console.log(json);
        }
      });
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});

      response.text().then(async function(text){
        console.log(text);
      });
    }
  });

}

async function submitAudioNote(){
  toggleButton("noteButton");
  toggleNoteProgressBar();

  let fileToUpload = null;

  if(RECORDED_AUDIO != null){
    //Audio has been manually recorded, not a file
    fileToUpload = RECORDED_AUDIO;
    console.log("RECORDED AUDIO");
  }
  else{
    fileToUpload = $("#note_file").get(0).files[0];
    console.log("FILE UPLOADA");
  }

  payload = {
    latitude:             $("#note_lat").val(),
    longitude:            $("#note_long").val(),
    audio:                fileToUpload
  };

  sendFileData(payload, "/api/audio-notes/save", async function(response){
    if(response.ok){
      response.json().then(async function(json){
        if(json.hasOwnProperty('error')){
          displayErrors(json);
          console.log(json);
        }
        else{
          M.toast({html: "Audio note uploaded successfully.", classes: "toast-success"});
          toggleNoteProgressBar();
          await sleep(2000);
          location.reload();
        }
      });
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});
    }
    toggleButton("noteButton");
    toggleNoteProgressBar();
  });
}

async function sendFileData(payload, route, callback){

  const formData = new FormData();

  for (opt in payload){
    formData.append(opt, payload[opt])
  }

  let options = {
    method: "POST",
    credentials: "same-origin",
    body: formData
  }

  console.log(options);

  fetch(APP_URL + route, options)
  .then(function(response){
    callback(response);
  })
}


async function submitRegistration(){

  toggleButton("registerButton");
  toggleRegisterProgressBar();

  payload = {
    firstname:              $("#reg_firstName").val(),
    lastname:               $("#reg_lastName").val(),
    password:               $("#reg_password").val(),
    password_confirmation:  $("#reg_passwordConfirmation").val(),
    email:                  $("#reg_email").val()
  };

  sendData(payload, "/api/register", async function(response){
    if(response.ok){
      response.json().then(async function(json){

        if(json.hasOwnProperty('error')){
          displayErrors(json);
          toggleButton("registerButton");
          toggleRegisterProgressBar();
        }
        else{
          M.toast({html: "Successfully registered.", classes: 'toast-success'});
          toggleRegisterProgressBar();
          await sleep(2000);
          location.reload();
        }
      })
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});
    }
    toggleButton("registerButton");
    toggleRegisterProgressBar();
  });
}

async function getFriends(){

  getData("/api/friends", async function(response){
    if(response.ok){
      response.json().then(async function(json){

        if(json.hasOwnProperty('error')){
          displayErrors(json);
        }
        else{
          M.toast({html: "Successfully retrieved friends.", classes: 'toast-success'});

          let friendRequests = 0;

          console.log(json);

          jQuery.each(json['success']["askfriends"], function() {
            document.getElementById('friendsDropdown').innerHTML +=
            '<li>\
              <div class="right friend-requests-buttons-container">\
                <a href="#!" onclick="acceptFriendRequest('+$(this)[0]['id']+');" class="btn-raised waves-effect btn friend-requests-button friend-requests-buttons"><i class="material-icons friend-requests-icons">done</i></a>\
                <a href="#!" onclick="denyFriendRequest('+$(this)[0]['id']+');" class="btn-raised waves-effect btn friend-requests-button friend-requests-buttons friend-deny-request"><i class="material-icons friend-requests-icons">clear</i></a>\
              </div>\
              <a href="#!">'+ $(this)[0]['firstname'] +' '+ $(this)[0]['lastname'] +'</a>\
            </li>';

            friendRequests += 1;
          });

          document.getElementById('friendsDropdown').innerHTML += '<li class="divider"></li>';

          jQuery.each(json['success']["friends"], function() {
            document.getElementById('friendsDropdown').innerHTML += '<li><a href="#!">'+ $(this)[0]['firstname'] +' '+ $(this)[0]['lastname'] +'</a></li>';
          });

          console.log(friendRequests);

          if(friendRequests > 0){
            let badge = document.getElementById('friendRequestsBadge');
            badge.style.visibility = "visible";
            badge.innerHTML = friendRequests;
          }

        }
      })
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});
    }
  });

}

async function acceptFriendRequest(userID){
  payload = {
    id: userID
  }

  putData(payload, "/api/friends/"+userID, async function(response){
    if(response.ok){
      response.json().then(async function(json){

        if(json.hasOwnProperty('error')){
          displayErrors(json);
        }
        else{
          M.toast({html: "Request accepted", classes: 'toast-success'});
          console.log(json);
        }
      })
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});

      response.text().then(async function(text){
        console.log(text);
      });
    }
  });
}

async function denyFriendRequest(userID){
  payload = {
    id: userID
  }

  deleteData(payload, "/api/friends/"+userID, async function(response){
    if(response.ok){
      response.json().then(async function(json){

        if(json.hasOwnProperty('error')){
          displayErrors(json);
        }
        else{
          M.toast({html: "Request denied", classes: 'toast-success'});
        }
      })
    }
    else{
      M.toast({html: 'An error occured while trying to perform this action. Please try again.', classes: 'toast-error'});

      response.text().then(async function(text){
        console.log(text);
      });
    }
  });
}

async function displayErrors(json){
  jsonErrors = json['error'];
  console.log(jsonErrors);
  for (var key in jsonErrors) {
    if (jsonErrors.hasOwnProperty(key)) {
      console.log(key + " -> " + jsonErrors[key]);
      M.toast({html: jsonErrors[key], classes: 'toast-error'});
    }
  }
}

async function sendData(payload, route, callback){

  let options = {
    method: "POST",
    credentials: "same-origin",
    headers: { 'Content-type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(payload).toString()
  }

  fetch(APP_URL + route, options)
  .then(function(response){
    callback(response);
  })
}

async function putData(payload, route, callback){

  let options = {
    method: "PUT",
    credentials: "same-origin",
    headers: { 'Content-type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(payload).toString()
  }

  fetch(APP_URL + route, options)
  .then(function(response){
    callback(response);
  })
}

async function deleteData(payload, route, callback){

  let options = {
    method: "DELETE",
    credentials: "same-origin",
    headers: { 'Content-type': 'application/x-www-form-urlencoded' },
    body: new URLSearchParams(payload).toString()
  }

  fetch(APP_URL + route, options)
  .then(function(response){
    callback(response);
  })
}

async function getData(route, callback){
  let options = {
    method: "GET",
    credentials: "same-origin",
    headers: { 'Content-type': 'application/x-www-form-urlencoded' },
  }

  fetch(APP_URL + route, options)
  .then(function(response){
    callback(response);
  })
}

function toggleButton(buttonId){
  button = document.getElementById(buttonId);
  if(button.classList.contains('disabled')){
    button.classList.remove("disabled");
    button.classList.add("action-buttons-color");
  }
  else{
    button.classList.remove("actions-buttons-color");
    button.classList.add("disabled");
  }
}

function toggleRegisterProgressBar(){
  if(registerProgressBar.status == 0.08){
    registerProgressBar.end();
  }
  else{
    registerProgressBar.start();
  }
}

function toggleLoginProgressBar(){
  if(loginProgressBar.status == 0.08){
    loginProgressBar.end();
  }
  else{
    loginProgressBar.start();
  }
}

function toggleNoteProgressBar(){
  if(noteProgressBar.status == 0.08){
    noteProgressBar.end();
  }
  else{
    noteProgressBar.start();
  }
}

function toggleSearchUserProgressBar(){
  if(searchUserProgressBar.status == 0.08){
    searchUserProgressBar.end();
  }
  else{
    searchUserProgressBar.start();
  }
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
