let headers = {
  Accept: 'application/json',
  'Content-Type': 'application/json',
}

var registerProgressBar;
var loginProgressBar;

function modalSubmitAutoInit(){
  registerProgressBar = new Mprogress({
    template: 4,
    parent: "#registerProgressBar"
  })

  loginProgressBar = new Mprogress({
    template: 4,
    parent: "#loginProgressBar"
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


async function test(){
  let options = {
    method: "GET",
    credentials: "same-origin",
    headers: { 'Accept': 'application/json' },
  }

  fetch(APP_URL + "/api/user", options)
  .then(function(response){
    if(response.ok){

    }
    else{

    }
  })
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

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
