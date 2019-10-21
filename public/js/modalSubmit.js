let headers = {
  Accept: 'application/json',
  'Content-Type': 'application/json',
}

function submitRegistration(){

  payload = {
      firstname:              $("#reg_firstName").val(),
      lastname:               $("#reg_lastName").val(),
      password:               $("#reg_password").val(),
      password_confirmation:  $("#reg_passwordConfirmation").val(),
      email:                  $("#reg_email").val()
  };

  sendData(payload);
  test();
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
    console.log(response.json())
  })
}

async function sendData(payload){

  let options = {
      method: "POST",
      credentials: "same-origin",
      headers: { 'Content-type': 'application/x-www-form-urlencoded' },
      body: new URLSearchParams(payload).toString()
  }

  fetch(APP_URL + "/api/register", options)
  .then(function(response){
    if(response.ok){

    }
    else{

    }
    console.log(response.json())
  })
}
